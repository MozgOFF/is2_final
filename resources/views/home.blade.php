@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>employee</strong>!
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Employee's profile</h4>
                </div>
                <div class="content">
                    <form>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Employee ID</label>
                                    <div class="well well-sm">{{ Auth::user()->emp_id }}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Username</label>
                                    <div class="well well-sm">{{ Auth::user()->name }}</div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <div class="well well-sm">{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <div class="well well-sm">{{$data->first_name}}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <div class="well well-sm">{{$data->last_name}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Birth date</label>
                                    <div class="well well-sm">{{$data->birth_date}}</div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Hire date</label>
                                    <div class="well well-sm">{{$data->hire_date}}</div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <div class="well well-sm">{{$data->gender}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Role</label>
                                    <div class="well well-sm">{{$data->title}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Department no.</label>
                                    <div class="well well-sm">{{$data->dept_no}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Department name</label>
                                    <div class="well well-sm">{{$data->dept_name}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Salary</label>
                                    <div class="well well-sm">{{$data->salary}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>From date</label>
                                    <div class="well well-sm">{{$data->from_date}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>To date</label>
                                    <div class="well well-sm">{{$data->to_date}}</div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
