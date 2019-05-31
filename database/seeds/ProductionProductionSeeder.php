<?php

use Illuminate\Database\Seeder;

use App\Usr;
use App\Project;
use App\Production;
use App\SubLine;

class ProductionProductionSeeder extends Seeder
{

    public function run()
    {
        $usrs = Usr::all();
        $projects = Project::all();
        $productions = Production::all();
        $sublines = Subline::all();

        foreach($usrs as $usr){
            $usr->projects()->attach(rand(1, count($projects)));
        }

        foreach($projects as $project){
            $project->usrs()->attach(rand(1, count($usrs)));
        }

        foreach($projects as $project){
            $project->sublines()->attach(rand(1, count($sublines)));
        }

        foreach($sublines as $subline){
            $subline->projects()->attach(rand(1, count($projects)));
        }

        foreach($sublines as $subline){
            $subline->productions()->attach(rand(1, count($productions)));
        }

        foreach($productions as $production){
            $production->sublines()->attach(rand(1, count($sublines)));
        }

    }
}
