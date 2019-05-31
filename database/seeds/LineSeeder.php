<?php

use Illuminate\Database\Seeder;
use App\Line;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Line::create([
            'name' => 'Imaging and Inverse Problems',
            'description' => '1'
        ]);
        Line::create([
            'name' => 'Motion Understanding',
            'description' => '2'
        ]);
        Line::create([
            'name' => 'Learning and Image Representation',
            'description' => '3'
        ]);
    }
}
