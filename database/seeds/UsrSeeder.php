<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Usr;

class UsrSeeder extends Seeder
{
    public function run()
    {
        Usr::create([
            'first_name' => 'Fabio',
            'last_name' => 'Martinez',
            'birthdate' => date("Y-m-d"),
            'email' => 'famarcar@gmail.com',
            'password' => Hash::make('clave'),
            'role' => '0',
            'biography' => 'Hola q tal',
        ]);
        Usr::create([
            'first_name' => 'Santiago',
            'last_name' => 'Gomez',
            'birthdate' => date("Y-m-d"),
            'email' => 'santiago@gomez.com',
            'password' => Hash::make('clave'),
            'role' => '1',
            'biography' => 'Hola q tal',
        ]);
        Usr::create([
            'first_name' => 'Juan',
            'last_name' => 'Marcon',
            'birthdate' => date("Y-m-d"),
            'email' => 'juan@marcon.com',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => 'Hola q tal',
        ]);
        Usr::create([
            'first_name' => 'Camilo',
            'last_name' => 'Lozano',
            'birthdate' => date("Y-m-d"),
            'email' => 'camilo@lozano.com',
            'password' => Hash::make('clave'),
            'role' => '2',
            'biography' => 'Hola q tal',
        ]);
    }
}
