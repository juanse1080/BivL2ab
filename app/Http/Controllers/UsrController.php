<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usr;
use App\Education;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUserValidator;
use App\Http\Requests\UpdateUserValidator;
use App\Http\Requests\EducationValidator;
use App\Http\Requests\PasswordValidator;
use Illuminate\Pagination\LengthAwarePaginator;


class UsrController extends Controller
{
    public function __construct() {
        $this->middleware('admin:0,1,2')->only(['edit', 'update']);
        $this->middleware('admin:0')->except(['show', 'index', 'edit', 'update', 'createEducation', 'storeEducation', 'changePassword', 'updatePassword']);
    }
    public function index() {
        $order = [
            'Postdoctor',
            'Doctor',
            'Master',
            'Undergraduate',
            'others'
        ];
        $usrs = Usr::educationGroup();
        return view('usrs.listUsers', ['usrs' => $usrs, 'order' => $order]);
    }

    // Create form for User
    public function create() {
        return view('usrs.createUser');
    }

    // Save users
    public function store(CreateUserValidator $request) {
        $validated = $request->all();
        $user = (new Usr)->fill($validated);
        $user->password = Hash::make($user->email);
        if ($user->save()) {
            return redirect('/account')->with('true', 'The user' . $user->first_name . ' has been succesfully created');
        } else {
            return back()->with('validated', 'Something went wrong. Try again.');
        }
    }

    public function show($pk_usr){
        $usr = Usr::find($pk_usr);
        $pill = [
            'badge-primary',
            'badge-secondary',
            'badge-success',
            'badge-danger',
            'badge-warning',
            'badge-info',
            'badge-light',
            'badge-dark',
        ];
        // find($pk): pk el id del Modelo que se esta buscando (Production)
        // attach(pk_i): pk_i es la pk del modelo que se quiere enlazar
        // dd(Production::find(4)->datasets);
        if(!empty($usr)){
            return view("usrs.profile", ['usr' => $usr, 'pill' => $pill]);
        } else {
            $mensaje = 'No user found.';
            return back()->with('false', $mensaje);
        }
    }

    // delete usr
    public function destroy(Request $request, $pk_usr) {
        $usr = Usr::find($pk_usr);
        $mensaje = 'The usr' . $usr->first_name . ' has been succesfully deleted';
        $usr->delete();
        return redirect('/account')->with('true', $mensaje);
    }

    public function edit($pk_usr) {
        if(session('usr')['role'] != 0 && session('usr')['pk_usr'] != $pk_usr){
            return back();
        }
        $usr = Usr::find($pk_usr);
        return view("usrs.editUser", compact('usr'));
    }

    public function update(UpdateUserValidator $request, $pk_usr) {
        if(session('usr')['role'] != 0 && session('usr')['pk_usr'] != $pk_usr){
            return back();
        }
        $usr = Usr::find($pk_usr)->fill($request->all());
        if ($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->first_name)).'_'.$pk_usr;
            $usr->photo = UtilsController::subirArchivo($request, $name, 'photo', 'usrs');
        }
        if ($usr->save()) {
            $mensaje = $usr->first_name.' profile has been succesfully updated';
            return redirect(route('account.show', $usr->pk_usr))->with('true', $mensaje);
        } else {
            return back()->with('validated', 'Something went wrong. Try again.');
        }
        return redirect()->route('account.update', $pk_usr)->with('success','The user has been succesfully updated');
    }

    public function createEducation($pk_usr) {
        if(session('usr')['role'] != 0 && session('usr')['pk_usr'] != $pk_usr){
            return back();
        }
        $usr = Usr::find($pk_usr);
        return view("usrs.createEducation", compact('usr'));
    }

    public function changePassword() {
        return view("usrs.changePassword");
    }

    public function updatePassword(PasswordValidator $request) {
        $usr = Usr::find(session('usr')['pk_usr']);
        if(Hash::check($request->oldpassword, $usr->password)){
            $usr->password = Hash::make($request->password);
            if($usr->save()){
                $mensaje = 'Password updated';
                return redirect(route('account.show', $usr->pk_usr))->with('true', $mensaje);
            } else {
                return back()->with('validated', 'Something went wrong. Try again.');
            }
        } else {
            return back()->with('validated', 'Try again');
        }
    }

    public function storeEducation(EducationValidator $request, $pk_usr) {
        if(session('usr')['role'] != 0 && session('usr')['pk_usr'] != $pk_usr){
            return back();
        }
        $education = (new Education)->fill($request->all());
        $education->type = ucwords($education->type);
        $education->fk_usr = $pk_usr;
        if ($education->save()) {
            $mensaje = 'Education has been added';
            return redirect(route('account.show', $pk_usr))->with('true', $mensaje);
        } else {
            return back()->with('validated', 'Something went wrong. Try again.');
        }
    }
}
