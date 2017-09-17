<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function getApplicantIdFromEmail(Request $request)
    {
        $email = urldecode($request->input('email'));
        if ($email) {
            $email_clean = trim($email,"'");
            $email_clean = trim($email_clean,"\"");
            $email_clean = trim($email_clean);
            $response = Applicant::where('student_email_address', $email_clean)->select(['applicant_id'])
            ->first();;
        }
        return response()->json($response->applicant_id);
       /* $results = Application::with(['applicant'=>function($query) {
            $query->addSelect(['id','first_name', 'last_name','student_email_address']);
        },
        
        'applicationGeneral'=>function($query) {
            $query->addSelect(['application_id','phone_number']);
        },
        'applicationDorm'=>function($query) {
            $query->addSelect(['application_id',\DB::raw('CONCAT(dorm_building,"",room_number) as dorm_assignment')]);
        }])
        ->whereHas('registration', function($query) {
            $query->where('checked_in',1);
        })
        ->select(['id','applicant_id'])
        ->get();

        $results_collection = collect($results)->all();
        $x=0;
        foreach($results_collection AS $rc) {
            $response[$x]['applicant_id'] = $rc->id;
            $response[$x]['first_name'] = trim($rc->applicant->first_name);
            $response[$x]['last_name'] = trim($rc->applicant->last_name);
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
        //return $results_collection;*/
    }
}
