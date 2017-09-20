<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page');
        
        $results = Application::with(['applicant'=>function($query) {
            $query->addSelect(['id','first_name', 'last_name','student_email_address']);
        },
        'program'=>function($query) {
            $query->addSelect(['id','title']);
        },     
        'applicationGeneral'=>function($query) {
            $query->addSelect(['application_id','phone_number','gender']);
        },
        'applicationDorm'=>function($query) {
            $query->addSelect(['application_id',\DB::raw('CONCAT(dorm_building,"",room_number) as dorm_assignment')]);
        }])
        ->whereHas('registration', function($query) {
            $query->where('checked_in',1);
        })
        ->select(['id','applicant_id','program_id'])
        ->get();

        $results_collection = collect($results)->all();
        $x=0;
        foreach($results_collection AS $rc) {
            $response[$x]['applicant_id'] = $rc->id;
            $response[$x]['first_name'] = trim($rc->applicant->first_name);
            $response[$x]['last_name'] = trim($rc->applicant->last_name);
            $response[$x]['gender'] = trim($rc->applicationGeneral['gender']);
            $response[$x]['title'] = trim($rc->program['title']);
            if (isset($rc->applicant->student_email_address)) {
                $response[$x]['student_email'] = trim($rc->applicant->student_email_address);                
            }
            else {
                $response[$x]['student_email'] = 'Not Assigned';
            }
            $response[$x]['mobile_number'] = trim($rc->applicationGeneral['phone_number']);
            if (isset($rc->applicationDorm)) {
                $response[$x]['dorm_assignment'] = $rc->applicationDorm['dorm_assignment'];
            }
            else {
                $response[$x]['dorm_assignment'] = 'Not Assigned';
            }
            $x++;
        }
        return response()->json($response);
        //return $results_collection;
    }
}
