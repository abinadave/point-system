<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function creatingJob(){
    	return response()->json([
    		'employees' => \App\Employee::orderBy('fullname','asc')->get()
    	]);
    }
}
