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
        'applicationGeneral'=>function($query) {
            $query->addSelect(['application_id','phone_number']);
        },
        'applicationDorm'=>function($query) {
            $query->addSelect(['application_id',\DB::raw('CONCAT(dorm_building,"",room_number) as dorm_assignment')]);
        }])
        ->select(['id','applicant_id'])
        ->get();

        return $results;
    }
}
