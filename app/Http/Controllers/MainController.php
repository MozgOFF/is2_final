<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10);
        return view('index', ['employees' => $employees]);
    }

    public function tables()
    {
        return view('table_list');
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

        $male = Employee::where('gender', '=', 'M')->count();
        $female = Employee::where('gender', '=', 'F')->count();
        //dd($male);
        //dd($employeesChart);
        return view('chart_list', ['employeesChartMale' => $male, 'employeesChartFemale' => $female]);
    }
}
