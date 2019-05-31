<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsrSeeder::class);
        $this->call(LineSeeder::class);
        $this->call(SubLineSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(ProductionSeeder::class);
        $this->call(NewSeeder::class);
        // $this->call(ProductionProductionSeeder::class);
    }
}
