<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

use Mail;
use App\Mail\ContactMail;
use App\News;
use App\Usr;
use App\Production;

class LoginController extends Controller{

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }
    
    public function __invoke(){
        return view('index', [
            'news' => News::all(), 
            'usrs' => Usr::all(), 
            'pills' => $pill = [
                'badge-primary',
                'badge-secondary',
                'badge-success',
                'badge-danger',
                'badge-warning',
                'badge-info',
                'badge-light',
                'badge-dark',
            ],
            'productions' => Production::all(),
        ]);
    }

    public function authenticate(LoginRequest $request){
        if ($request->ajax()) {
            $auth = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            if($auth){
                session(['usr'=> Auth::user()->session(),'role' => Auth::user()->role]);
                return response()->json([
                    'state' => true,
                    'msg' => null,
                ]);
            }else{
                return response()->json([
                    'state' => $auth,
                    'msg' => 'The credentials do not match, try again',
                ]);
            }
        }
    }

    public function logout(){
        session()->flush();
        Auth::logout();
        return redirect(url("/"));
    }

    public function contacto(Request $request){
        Mail::to('colezequielflorian@hotmail.com')->send(new ContactMail($request->all()));
        return redirect('/#contacto') -> with('exito', 'Su mensaje fue enviado con exito');
    }
}
