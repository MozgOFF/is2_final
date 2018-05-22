<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Salary;
use App\Title;
use Illuminate\Http\Request;
use App\Department;
use App\DeptEmp;
use App\DepManager;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $employees = Employee::paginate(10);
        if ($request->ajax()) {
            return view('employees', compact('employees'));
        }
        return view('index', ['employees' => $employees]);
    }

    public function tables()
    {
        $departments = Department::paginate(5);
        $employees = Employee::paginate(5);
        $dep_emp = DeptEmp::paginate(5);
        $dep_manager = DepManager::paginate(5);
        $salaries = Salary::paginate(5);
        $titles = Title::paginate(5);

//        $departmentsc = Department::all()->count();
//        $titlesc = Title::all()->count();
//        $dep_empc = DeptEmp::all()->count();
//        $dep_managerc = DepManager::all()->count();
//        $salariesc = Salary::all()->count();
//        $employeesc = Employee::all()->count();


        $data = array (
            'departments' => $departments,
            'employees' => $employees,
            'dep_emp' => $dep_emp,
            'dep_manager' => $dep_manager,
            'salaries' => $salaries,
            'titles' => $titles,
//            'departmentsc' => $departmentsc,
//            'employeesc' => $employeesc,
//            'dep_empc' => $dep_empc,
//            'dep_managerc' => $dep_managerc,
//            'salariesc' => $salariesc,
//            'titlesc' => $titlesc,
        );

        return view('table_list', ['data' => $data]);
    }

    public function search()
    {
        return view('search');
    }

    public function charts()
    {/*
        $employeesChart = Employees::all()->get([
            DB::raw('Date(created_at) as date'),
            DB::raw('COUNT(gender) as value')
        ])->toJSON();*/

        $male_chart_1 = Employee::where('gender', '=', 'M')->count();
        $female_chart_1 = Employee::where('gender', '=', 'F')->count();

        $emp_hire_date_1 = Employee::where('hire_date', 'like', '1987%')->count();
        $emp_hire_date_2 = Employee::where('hire_date', 'like', '1988%')->count();
        $emp_hire_date_3 = Employee::where('hire_date', 'like', '1989%')->count();
        $emp_hire_date_4 = Employee::where('hire_date', 'like', '1990%')->count();
        $emp_hire_date_5 = Employee::where('hire_date', 'like', '1991%')->count();
        $emp_hire_date_6 = Employee::where('hire_date', 'like', '1992%')->count();
        $emp_hire_date_7 = Employee::where('hire_date', 'like', '1993%')->count();
        $emp_hire_date_8 = Employee::where('hire_date', 'like', '1994%')->count();
        $emp_hire_date_9 = Employee::where('hire_date', 'like', '1995%')->count();
        $emp_hire_date_10 = Employee::where('hire_date', 'like', '1996%')->count();
        $emp_hire_date_11 = Employee::where('hire_date', 'like', '1997%')->count();
        $emp_hire_date_12 = Employee::where('hire_date', 'like', '1998%')->count();
        $emp_hire_date_13 = Employee::where('hire_date', 'like', '1999%')->count();
        $emp_hire_date_14 = Employee::where('hire_date', 'like', '1986%')->count();
        $emp_hire_date_15 = Employee::where('hire_date', 'like', '1985%')->count();

        $emp_dep_number_1 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Customer Service')->count();
        $emp_dep_number_2 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Development')->count();
        $emp_dep_number_3 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Finance')->count();
        $emp_dep_number_4 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Human Resources')->count();
        $emp_dep_number_5 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Marketing')->count();
        $emp_dep_number_6 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Production')->count();
        $emp_dep_number_7 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Quality Management')->count();
        $emp_dep_number_8 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Research')->count();
        $emp_dep_number_9 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Sales')->count();

        $emp_hire_date_female_1 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1985%')->count();
        $emp_hire_date_female_2 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1986%')->count();
        $emp_hire_date_female_3 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1987%')->count();
        $emp_hire_date_female_4 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1988%')->count();
        $emp_hire_date_female_5 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1989%')->count();
        $emp_hire_date_female_6 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1990%')->count();
        $emp_hire_date_female_7 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1991%')->count();
        $emp_hire_date_female_8 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1992%')->count();
        $emp_hire_date_female_9 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1993%')->count();
        $emp_hire_date_female_10 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1994%')->count();
        $emp_hire_date_female_11 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1995%')->count();
        $emp_hire_date_female_12 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1996%')->count();
        $emp_hire_date_female_13 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1997%')->count();
        $emp_hire_date_female_14 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1998%')->count();
        $emp_hire_date_female_15 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'F')
            ->where('employees.hire_date', 'like', '1999%')->count();

        $emp_hire_date_male_1 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1985%')->count();
        $emp_hire_date_male_2 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1986%')->count();
        $emp_hire_date_male_3 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1987%')->count();
        $emp_hire_date_male_4 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1988%')->count();
        $emp_hire_date_male_5 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1989%')->count();
        $emp_hire_date_male_6 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1990%')->count();
        $emp_hire_date_male_7 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1991%')->count();
        $emp_hire_date_male_8 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1992%')->count();
        $emp_hire_date_male_9 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1993%')->count();
        $emp_hire_date_male_10 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1994%')->count();
        $emp_hire_date_male_11 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1995%')->count();
        $emp_hire_date_male_12 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1996%')->count();
        $emp_hire_date_male_13 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1997%')->count();
        $emp_hire_date_male_14 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1998%')->count();
        $emp_hire_date_male_15 = Employee::
        join('titles', 'titles.emp_no', '=', 'employees.emp_no')
            ->join('salaries', 'salaries.emp_no', '=', 'employees.emp_no')
            ->join('dept_emp', 'dept_emp.emp_no', '=', 'employees.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('employees.gender', '=', 'M')
            ->where('employees.hire_date', 'like', '1999%')->count();

        $dept_avg_salary_1 = Salary::
        join('dept_emp', 'dept_emp.emp_no', '=', 'salaries.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Customer Service')->avg('salary');
        $dept_avg_salary_2 = Salary::
        join('dept_emp', 'dept_emp.emp_no', '=', 'salaries.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Development')->avg('salary');
        $dept_avg_salary_3 = Salary::
        join('dept_emp', 'dept_emp.emp_no', '=', 'salaries.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Finance')->avg('salary');
        $dept_avg_salary_4 = Salary::
        join('dept_emp', 'dept_emp.emp_no', '=', 'salaries.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Human Resources')->avg('salary');
        $dept_avg_salary_5 = Salary::
        join('dept_emp', 'dept_emp.emp_no', '=', 'salaries.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Marketing')->avg('salary');
        $dept_avg_salary_6 = Salary::
        join('dept_emp', 'dept_emp.emp_no', '=', 'salaries.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Production')->avg('salary');
        $dept_avg_salary_7 = Salary::
        join('dept_emp', 'dept_emp.emp_no', '=', 'salaries.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Quality Management')->avg('salary');
        $dept_avg_salary_8 = Salary::
        join('dept_emp', 'dept_emp.emp_no', '=', 'salaries.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Research')->avg('salary');
        $dept_avg_salary_9 = Salary::
        join('dept_emp', 'dept_emp.emp_no', '=', 'salaries.emp_no')
            ->join('departments', 'departments.dept_no', '=', 'dept_emp.dept_no')
            ->where('departments.dept_name', '=', 'Sales')->avg('salary');




        $array = array (
            'male' => $male_chart_1,
            'female' => $female_chart_1,
            'emp_hire_date_1' => $emp_hire_date_1,
            'emp_hire_date_2' => $emp_hire_date_2,
            'emp_hire_date_3' => $emp_hire_date_3,
            'emp_hire_date_4' => $emp_hire_date_4,
            'emp_hire_date_5' => $emp_hire_date_5,
            'emp_hire_date_6' => $emp_hire_date_6,
            'emp_hire_date_7' => $emp_hire_date_7,
            'emp_hire_date_8' => $emp_hire_date_8,
            'emp_hire_date_9' => $emp_hire_date_9,
            'emp_hire_date_10' => $emp_hire_date_10,
            'emp_hire_date_11' => $emp_hire_date_11,
            'emp_hire_date_12' => $emp_hire_date_12,
            'emp_hire_date_13' => $emp_hire_date_13,
            'emp_hire_date_15' => $emp_hire_date_14,
            'emp_hire_date_14' => $emp_hire_date_15,
            'emp_dep_number_1' => $emp_dep_number_1,
            'emp_dep_number_2' => $emp_dep_number_2,
            'emp_dep_number_3' => $emp_dep_number_3,
            'emp_dep_number_4' => $emp_dep_number_4,
            'emp_dep_number_5' => $emp_dep_number_5,
            'emp_dep_number_6' => $emp_dep_number_6,
            'emp_dep_number_7' => $emp_dep_number_7,
            'emp_dep_number_8' => $emp_dep_number_8,
            'emp_dep_number_9' => $emp_dep_number_9,
            'emp_hire_date_female_1' =>$emp_hire_date_female_1,
            'emp_hire_date_female_2' =>$emp_hire_date_female_2,
            'emp_hire_date_female_3' =>$emp_hire_date_female_3,
            'emp_hire_date_female_4' =>$emp_hire_date_female_4,
            'emp_hire_date_female_5' =>$emp_hire_date_female_5,
            'emp_hire_date_female_6' =>$emp_hire_date_female_6,
            'emp_hire_date_female_7' =>$emp_hire_date_female_7,
            'emp_hire_date_female_8' =>$emp_hire_date_female_8,
            'emp_hire_date_female_9' =>$emp_hire_date_female_9,
            'emp_hire_date_female_10' =>$emp_hire_date_female_10,
            'emp_hire_date_female_11' =>$emp_hire_date_female_11,
            'emp_hire_date_female_12' =>$emp_hire_date_female_12,
            'emp_hire_date_female_13' =>$emp_hire_date_female_13,
            'emp_hire_date_female_14' =>$emp_hire_date_female_14,
            'emp_hire_date_female_15' =>$emp_hire_date_female_15,
            'emp_hire_date_male_1' =>$emp_hire_date_male_1,
            'emp_hire_date_male_2' =>$emp_hire_date_male_2,
            'emp_hire_date_male_3' =>$emp_hire_date_male_3,
            'emp_hire_date_male_4' =>$emp_hire_date_male_4,
            'emp_hire_date_male_5' =>$emp_hire_date_male_5,
            'emp_hire_date_male_6' =>$emp_hire_date_male_6,
            'emp_hire_date_male_7' =>$emp_hire_date_male_7,
            'emp_hire_date_male_8' =>$emp_hire_date_male_8,
            'emp_hire_date_male_9' =>$emp_hire_date_male_9,
            'emp_hire_date_male_10' =>$emp_hire_date_male_10,
            'emp_hire_date_male_11' =>$emp_hire_date_male_11,
            'emp_hire_date_male_12' =>$emp_hire_date_male_12,
            'emp_hire_date_male_13' =>$emp_hire_date_male_13,
            'emp_hire_date_male_14' =>$emp_hire_date_male_14,
            'emp_hire_date_male_15' =>$emp_hire_date_male_15,
            'dept_avg_salary_1' => $dept_avg_salary_1,
            'dept_avg_salary_2' => $dept_avg_salary_2,
            'dept_avg_salary_3' => $dept_avg_salary_3,
            'dept_avg_salary_4' => $dept_avg_salary_4,
            'dept_avg_salary_5' => $dept_avg_salary_5,
            'dept_avg_salary_6' => $dept_avg_salary_6,
            'dept_avg_salary_7' => $dept_avg_salary_7,
            'dept_avg_salary_8' => $dept_avg_salary_8,
            'dept_avg_salary_9' => $dept_avg_salary_9,
        );
        //dd($male);
        //dd($employeesChart);
        return view('chart_list', ['data' => $array]);
    }
}
