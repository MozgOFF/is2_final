<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $employees = Employees::paginate(10);
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
    {
        return view('chart_list');
    }
}
