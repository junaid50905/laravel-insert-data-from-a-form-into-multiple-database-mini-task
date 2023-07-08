<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\phones;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        // Create a new user
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->save();

        // Create a new phone associated with the user
        $phone = new phones;
        $phone->employee_id = $employee->id;
        $phone->number = $request->number;
        $phone->save();

        return redirect()->back();
    }

}
