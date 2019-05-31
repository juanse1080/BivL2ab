<?php

use Illuminate\Database\Seeder;
use App\Estudio;
class EducationSeeder extends Seeder
{
    
    public function run()
    {
        Estudio::create([
            'school' => 'Université de Paris-Saclay',
            'title' => 'U2IS/Robotics-Vision, LIMSI-CNRS. Postdoctor',
            'start' => '2014-11-01',
            'end' => '2016-05-01',
            'fk_usr' => '1',
            'type' => 'Postdoctor',
        ]);

        Estudio::create([
            'school' => 'NATIONAL UNIVERSITY OF COLOMBIA',
            'title' => 'Doctorate in Systems and Computing Engineering',
            'start' => '2010-02-00',
            'end' => '2015-03-00',
            'fk_usr' => '1',
            'type' => 'Doctor',
        ]);

        Estudio::create([
            'school' => 'NATIONAL UNIVERSITY OF COLOMBIA',
            'title' => 'Biomedical',
            'start' => '2009-09-00',
            'end' => '2007-02-00',
            'fk_usr' => '1',
            'type' => 'Magister',
        ]);

        Estudio::create([
            'school' => 'UNIVERSITY OF PAMPLONA',
            'title' => 'Mechatronics Engineering',
            'start' => '2001-01-00',
            'end' => '2006-01-00',
            'fk_usr' => '1',
            'type' => 'Undergrade',
        ]);
    }
}
