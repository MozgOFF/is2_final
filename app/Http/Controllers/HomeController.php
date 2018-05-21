<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\DeptEmp;
use App\Department;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp_no = Auth::user()->emp_id;
        //$emp_data = Employee::where('emp_no', $emp_no)->first();
        $emp_data = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.emp_no', $emp_no)->first();
//        $emp_data = json_encode($emp_data);
        return view('home', ['data' => $emp_data]);
    }
}
