<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;
class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $newJob = new Job();
        $newJob->Job = 'Web Developer';
        $newJob->Ocupation_id = 1;
        $newJob->save();

        $newJob = new Job();
        $newJob->Job = 'Analistas de sistemas';
        $newJob->Ocupation_id = 1;
        $newJob->save();

        $newJob = new Job();
        $newJob->Job = 'Desarrolladores de software';
        $newJob->Ocupation_id = 1;
        $newJob->save();

        $newJob = new Job();
        $newJob->Job = 'Programadores de aplicaciones';
        $newJob->Ocupation_id = 1;
        $newJob->save();

        $newJob = new Job();
        $newJob->Job = 'Desarrolladores y analistas de software
        y multimedia no clasificados en otras
        ocupaciones';
        $newJob->Ocupation_id = 1;
        $newJob->save();
    }
}
