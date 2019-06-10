<?php

use Illuminate\Database\Seeder;
use App\Education;

class EducationSeeder extends Seeder
{
    
    public function run()
    {
        Education::create([
            'school' => 'Université de Paris-Saclay',
            'title' => 'U2IS/Robotics-Vision, LIMSI-CNRS. Postdoctor',
            'start' => '2014-11-01',
            'end' => '2016-05-01',
            'fk_usr' => '1',
            'type' => 'Postdoctor',
        ]);

        Education::create([
            'school' => 'NATIONAL UNIVERSITY OF COLOMBIA',
            'title' => 'Doctorate in Systems and Computing Engineering',
            'start' => '2010-02-01',
            'end' => '2015-03-01',
            'fk_usr' => '1',
            'type' => 'Doctor',
        ]);

        Education::create([
            'school' => 'NATIONAL UNIVERSITY OF COLOMBIA',
            'title' => 'Biomedical',
            'start' => '2009-09-01',
            'end' => '2007-02-01',
            'fk_usr' => '1',
            'type' => 'Master',
        ]);

        Education::create([
            'school' => 'UNIVERSITY OF PAMPLONA',
            'title' => 'Mechatronics Engineering',
            'start' => '2001-01-01',
            'end' => '2006-01-01',
            'fk_usr' => '1',
            'type' => 'Undergrade',
        ]);
    }
}
