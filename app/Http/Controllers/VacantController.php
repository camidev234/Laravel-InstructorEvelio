<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacant;
class VacantController extends Controller
{
    //

    public function vacants() {
        $vacants = Vacant::join('jobs', 'vacants.job_id', '=', 'jobs.id')->select('vacants.vacant_code', 'jobs.Job')->get();
        return view('/vacants/indexVacant', [
            'allVacants' => $vacants
        ]);
    }


}
