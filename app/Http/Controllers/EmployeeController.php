<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee as Employee;

class EmployeeController extends Controller
{
    public function insert(Request $request){
    	$this->validate($request, [
	        'fullname' => 'required|unique:employees',
	        'position' => 'required',
	    ]);
	    $emp = new Employee;
	    $emp->fullname = $request->input('fullname');
	    $emp->position = $request->input('position');
	    $emp->save();
	    return $emp;
    }
    public function fetchEmployee(){
		return response()->json([
			'employees' => Employee::orderBy('id','desc')->get()
		]);
	}
}
