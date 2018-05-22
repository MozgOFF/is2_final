@extends('layout')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Departments</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Dept_no</th>
                                <th>Dept_name</th>
                            </tr>
                            </thead>
                            @foreach($data['departments'] as $department)
                                <tr class="info">
                                    <td>{{$department->dept_no}}</td>
                                    <td>{{$department->dept_name}}</td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $data['departments']->links() }}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Dep_emp</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Emp_no</th>
                                <th>Dept_no</th>
                                <th>From_date</th>
                                <th>To_date</th>
                            </tr>
                            </thead>
                            @foreach($data['dep_emp'] as $dep_emp)
                                <tr class="info">
                                    <td>{{$dep_emp->emp_no}}</td>
                                    <td>{{$dep_emp->dept_no}}</td>
                                    <td>{{$dep_emp->from_date}}</td>
                                    <td>{{$dep_emp->to_date}}</td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $data['dep_emp']->links() }}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Dep_manager</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Emp_no</th>
                                <th>Dept_no</th>
                                <th>From_date</th>
                                <th>To_date</th>
                            </tr>
                            </thead>
                            @foreach($data['dep_manager'] as $dep_manager)
                                <tr class="info">
                                    <td>{{ $dep_manager->emp_no }}</td>
                                    <td>{{ $dep_manager->dept_no }}</td>
                                    <td>{{ $dep_manager->from_date }}</td>
                                    <td>{{ $dep_manager->to_date }}</td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $data['dep_manager']->links() }}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Employees</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Emp_no</th>
                                <th>Birth_date</th>
                                <th>First_name</th>
                                <th>Last name</th>
                                <th>Gender</th>
                                <th>Hire_date</th>
                            </tr>
                            </thead>
                            @foreach($data['employees'] as $employees)
                                <tr class="info">
                                    <td>{{$employees->emp_no}}</td>
                                    <td>{{$employees->birth_date}}</td>
                                    <td>{{$employees->first_name}}</td>
                                    <td>{{$employees->last_name}}</td>
                                    <td>{{$employees->gender}}</td>
                                    <td>{{$employees->hire_date}}</td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $data['employees']->links() }}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Salaries</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Emp_no</th>
                                <th>Salary</th>
                                <th>From_date</th>
                                <th>To_date</th>
                            </tr>
                            </thead>
                            @foreach($data['salaries'] as $salary)
                                <tr class="info">
                                    <td>{{ $salary->emp_no }}</td>
                                    <td>{{ $salary->salary }}</td>
                                    <td>{{ $salary->from_date }}</td>
                                    <td>{{ $salary->to_date }}</td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $data['salaries']->links() }}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Titles</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Emp_no</th>
                                <th>title</th>
                                <th>From_date</th>
                                <th>To_date</th>
                            </tr>
                            </thead>
                            @foreach($data['titles'] as $title)
                                <tr class="info">
                                    <td>{{ $title->emp_no }}</td>
                                    <td>{{ $title->title }}</td>
                                    <td>{{ $title->from_date }}</td>
                                    <td>{{ $title->to_date }}</td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $data['titles']->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection