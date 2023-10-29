<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacant;
use App\Models\Job;
class VacantController extends Controller
{
    //


    // function to show all vacants
    public function vacants() {
        $vacants = Vacant::join('jobs', 'vacants.job_id', '=', 'jobs.id')->select('vacants.*', 'jobs.Job',)->get();
        return view('/vacants/indexVacant', [
            'allVacants' => $vacants
        ]);
    }

    // function to redirect to form to create a new vacant
    public function createVacant() {
        // RETURNS ALL JOBS
        $allJobs = Job::all();
        return view('/vacants/createVacant', [
            'allJobs' => $allJobs
        ]);
    }

    // function to save the new vacant on the BD
    public function saveVacant(Request $inputs){
        $newVacant = new Vacant();

        $inputs->validate([
            'vacant_code' => ['required', 'min:6', 'string', 'max:7'],
            'job_id' => ['required'],
            'skills' => ['required', 'string', 'max:500'],
            'competencies' => ['required', 'string', 'max:900'],
            'expertise_required' => ['required', 'integer'],
            'salary' => ['required', 'string','min:7', 'max:30'],
            'places_available' => ['required', 'integer'],
        ]);

        $newVacant->vacant_code = $inputs->vacant_code;
        $newVacant->job_id = $inputs->job_id;
        $newVacant->skills = $inputs->skills;
        $newVacant->competencies = $inputs->competencies;
        $newVacant->expertise_required = $inputs->expertise_required;
        $newVacant->salary = $inputs->salary;
        $newVacant->places_available = $inputs->places_available;

        $newVacant->save();

        // REDIRECT TO LIST OF VACANTS
        return redirect()->route('vacants.allVacants');
    }

    // function to view details of a vacant
    public function viewVacant($id){
        // USING INNER JOIN AND SELECTING THE CORRESPONDING VACANT
        $vacant = Vacant::join('jobs', 'vacants.job_id', '=', 'jobs.id')->select('vacants.*', 'jobs.Job',)->where('vacants.id', $id)->first();

        // RETURNS THE VACANT INFORMATION
        return view('/vacants/viewVacantInfo', [
            'vacant' => $vacant
        ]);
    }

    // Function to delete a vacant

    public function deleteVacant($id){
        // select the vacant
        $vacant = Vacant::findOrFail($id);

        // delete the vacanct

        $vacant->delete();

        // redirect to list of vacants

        return redirect()->route('vacants.allVacants')->with('success', 'vacant deleted successfully');
    }

}
