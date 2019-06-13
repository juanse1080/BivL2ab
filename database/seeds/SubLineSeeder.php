<?php

use Illuminate\Database\Seeder;
use App\Line;
use App\SubLine;

class SubLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motionUnderstanding = Line::where('name', 'Motion Understanding')->first();
        
        SubLine::create([
            'name' => 'Motion Magnification',
            'description' => '1',
            'fk_line' => $motionUnderstanding->pk_line
        ]);
        SubLine::create([
            'name' => 'Gait Analysis',
            'description' => '2',
            'fk_line' => $motionUnderstanding->pk_line
        ]);
        SubLine::create([
            'name' => 'Tracking and Temporal Segmentation',
            'description' => '3',
            'fk_line' => $motionUnderstanding->pk_line
        ]);

        $imagingAndInverseProblems = Line::where('name', 'Imaging and Inverse Problems')->first();

        SubLine::create([
            'name' => 'Image Formation Models',
            'description' => '4',
            'fk_line' => $imagingAndInverseProblems->pk_line
        ]);
        SubLine::create([
            'name' => 'Image Reconstruction',
            'description' => '5',
            'fk_line' => $imagingAndInverseProblems->pk_line
        ]);
        SubLine::create([
            'name' => 'Biomedical Image Reconstruction',
            'description' => '6',
            'fk_line' => $imagingAndInverseProblems->pk_line
        ]);

        $learningAndImageRepresentation = Line::where('name', 'Learning and Image Representation')->first();

        SubLine::create([
            'name' => 'Learning Models',
            'description' => '7',
            'fk_line' => $learningAndImageRepresentation->pk_line
        ]);
        SubLine::create([
            'name' => 'Image Data Analytics',
            'description' => '8',
            'fk_line' => $learningAndImageRepresentation->pk_line
        ]);
        SubLine::create([
            'name' => 'Fusion Models',
            'description' => '9',
            'fk_line' => $learningAndImageRepresentation->pk_line
        ]);
    }
}
