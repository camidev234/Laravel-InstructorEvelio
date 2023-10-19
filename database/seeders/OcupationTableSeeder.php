<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ocupation;
class OcupationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $newOcupation = new Ocupation();

        $newOcupation->Ocupation = 'Ingenieros de tecnologías de la
        información';
        $newOcupation->save();
    }
}
