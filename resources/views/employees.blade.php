<style>
    #preloader
    {
        display:none;
    }
</style>

<div class="holder" id="preloader">
    <div class="preloader"><div></div><div></div></div>
</div>

<div id="output">
    <h4 class="title">Employees</h4>
    <p class="category">Last Campaign Performance</p>
    <table class="table table-bordered table-hover">
        <thead>
        <tr class="success">
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Gender</th>
            <th>Hire date</th>
            <th>Birth date</th>
        </tr>
        </thead>
        @foreach($employees as $employee)
            <tr class="info">
                <td>{{$employee->first_name}}</td>
                <td>{{$employee->last_name}}</td>
                <td>{{$employee->gender}}</td>
                <td>{{$employee->hire_date}}</td>
                <td>{{$employee->birth_date}}</td>
            </tr>
        @endforeach
    </table>
    {{ $employees->render() }}
</div>
