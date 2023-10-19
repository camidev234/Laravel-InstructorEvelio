<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacant;
use App\Models\Job;
class VacantController extends Controller
{
    //

    public function vacants() {
        $vacants = Vacant::join('jobs', 'vacants.job_id', '=', 'jobs.id')->select('vacants.*', 'jobs.Job',)->get();
        return view('/vacants/indexVacant', [
            'allVacants' => $vacants
        ]);
    }

    public function createVacant() {
        $allJobs = Job::all();
        return view('/vacants/createVacant', [
            'allJobs' => $allJobs
        ]);
    }

    public function saveVacant(Request $inputs){
        $newVacant = new Vacant();

        $newVacant->vacant_code = $inputs->vacant_code;
        $newVacant->job_id = $inputs->job_id;
        $newVacant->skills = $inputs->skills;
        $newVacant->competencies = $inputs->competencies;
        $newVacant->expertise_required = $inputs->expertise_required;
        $newVacant->salary = $inputs->salary;
        $newVacant->places_available = $inputs->places_available;

        $newVacant->save();

        return redirect()->route('vacants.allVacants');
    }

    public function viewVacant($id){
        $vacant = Vacant::join('jobs', 'vacants.job_id', '=', 'jobs.id')->select('vacants.*', 'jobs.Job',)->where('vacants.id', $id)->first();

        return view('/vacants/viewVacantInfo', [
            'vacant' => $vacant
        ]);
    }

}
