@extends('layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Males vs Females</h4>
                        <p class="category">Comparison the number of males and females</p>
                    </div>
                    <div class="content">
                        {{--<div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>--}}
                        <div id="myfirstchart"></div>

                        <script>
                            new Morris.Bar({
                                // ID of the element in which to draw the chart.
                                element: 'myfirstchart',
                                // Chart data records -- each entry in this array corresponds to a point on
                                // the chart.
                                data: [

                                    { gender: 'Male', value: {{ $data['male'] }} },
                                    { gender: 'Female', value: {{ $data['female'] }} }

                                ],
                                // The name of the data record attribute that contains x-values.
                                xkey: 'gender',
                                // A list of names of data record attributes that contain y-values.
                                ykeys: ['value'],
                                // Labels for the ykeys -- will be displayed when you hover over the
                                // chart.
                                labels: ['Number'],

                                barColors: function (row, series, type) {
                                    //console.log("--> "+row.label, series, type);
                                    if(row.label == "Male") return "#0088de";
                                    else if(row.label == "Female") return "#ad3d7a";}
                            });
                        </script>
                        {{--<div class="footer">--}}
                            {{--<div class="legend">--}}
                                {{--<i class="fa fa-circle" style="color: #0088de"></i> Male--}}
                                {{--<i class="fa fa-circle" style="color: #ad3d7a"></i> Female--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--<div class="stats">--}}
                                {{--<i class="fa fa-clock-o"></i> Campaign sent 2 days ago--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Number of employees hired</h4>
                        <p class="category">The number of employees hired for each year</p>
                    </div>
                    <div id="line_graph"></div>

                    <script>
                        new Morris.Line({
                            // ID of the element in which to draw the chart.
                            element: 'line_graph',
                            // Chart data records -- each entry in this array corresponds to a point on
                            // the chart.
                            data: [
                                { year: '1987', value: {{ $data['emp_hire_date_1'] }} },
                                { year: '1988', value: {{ $data['emp_hire_date_2'] }} },
                                { year: '1989', value: {{ $data['emp_hire_date_3'] }} },
                                { year: '1990', value: {{ $data['emp_hire_date_4'] }} },
                                { year: '1991', value: {{ $data['emp_hire_date_5'] }} },
                                { year: '1992', value: {{ $data['emp_hire_date_6'] }} },
                                { year: '1993', value: {{ $data['emp_hire_date_7'] }} },
                                { year: '1994', value: {{ $data['emp_hire_date_8'] }} },
                                { year: '1995', value: {{ $data['emp_hire_date_9'] }} },
                                { year: '1996', value: {{ $data['emp_hire_date_10'] }} },
                                { year: '1997', value: {{ $data['emp_hire_date_11'] }} },
                                { year: '1998', value: {{ $data['emp_hire_date_12'] }} },
                                { year: '1999', value: {{ $data['emp_hire_date_13'] }} },
                                { year: '1985', value: {{ $data['emp_hire_date_14'] }} },
                                { year: '1986', value: {{ $data['emp_hire_date_15'] }} },
                            ],
                            // The name of the data record attribute that contains x-values.
                            xkey: 'year',
                            // A list of names of data record attributes that contain y-values.
                            ykeys: ['value'],
                            // Labels for the ykeys -- will be displayed when you hover over the
                            // chart.
                            labels: ['Value']
                        });
                    </script>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Employees for each department</h4>
                            <p class="category">The number of employees for each department</p>
                        </div>
                        <div id="donut-chart"></div>
                        <script>
                            Morris.Donut({
                                element: 'donut-chart',
                                data: [
                                    {label: "Customer Service", value: {{ $data['emp_dep_number_1'] }}},
                                    {label: "Development", value: {{ $data['emp_dep_number_2'] }}},
                                    {label: "Finance", value: {{ $data['emp_dep_number_3'] }}},
                                    {label: "Human Resources", value: {{ $data['emp_dep_number_4'] }}},
                                    {label: "Marketing", value: {{ $data['emp_dep_number_5'] }}},
                                    {label: "Production", value: {{ $data['emp_dep_number_6'] }}},
                                    {label: "Quality Management", value: {{ $data['emp_dep_number_7'] }}},
                                    {label: "Research", value: {{ $data['emp_dep_number_8'] }}},
                                    {label: "Sales", value: {{ $data['emp_dep_number_9'] }}},
                                ]
                            });
                        </script>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Males and Females hired for each year</h4>
                            <p class="category">The number of employees hired in each year distinguished by gender</p>
                        </div>
                        <div id="area_graph"></div>
                        <script>
                            Morris.Area({
                                element: 'area_graph',
                                data: [
                                    { y: '1985', a: {{ $data['emp_hire_date_male_1'] }} , b: {{ $data['emp_hire_date_female_1'] }} },
                                    { y: '1986', a: {{ $data['emp_hire_date_male_2'] }} , b: {{ $data['emp_hire_date_female_2'] }} },
                                    { y: '1987', a: {{ $data['emp_hire_date_male_3'] }} , b: {{ $data['emp_hire_date_female_3'] }} },
                                    { y: '1988', a: {{ $data['emp_hire_date_male_4'] }} , b: {{ $data['emp_hire_date_female_4'] }} },
                                    { y: '1989', a: {{ $data['emp_hire_date_male_5'] }} , b: {{ $data['emp_hire_date_female_5'] }} },
                                    { y: '1990', a: {{ $data['emp_hire_date_male_6'] }} , b: {{ $data['emp_hire_date_female_6'] }} },
                                    { y: '1991', a: {{ $data['emp_hire_date_male_7'] }} , b: {{ $data['emp_hire_date_female_7'] }} },
                                    { y: '1992', a: {{ $data['emp_hire_date_male_8'] }} , b: {{ $data['emp_hire_date_female_8'] }} },
                                    { y: '1993', a: {{ $data['emp_hire_date_male_9'] }} , b: {{ $data['emp_hire_date_female_9'] }} },
                                    { y: '1994', a: {{ $data['emp_hire_date_male_10'] }} , b: {{ $data['emp_hire_date_female_10'] }} },
                                    { y: '1995', a: {{ $data['emp_hire_date_male_11'] }} , b: {{ $data['emp_hire_date_female_11'] }} },
                                    { y: '1996', a: {{ $data['emp_hire_date_male_12'] }} , b: {{ $data['emp_hire_date_female_12'] }} },
                                    { y: '1997', a: {{ $data['emp_hire_date_male_13'] }} , b: {{ $data['emp_hire_date_female_13'] }} },
                                    { y: '1998', a: {{ $data['emp_hire_date_male_14'] }} , b: {{ $data['emp_hire_date_female_14'] }} },
                                    { y: '1999', a: {{ $data['emp_hire_date_male_15'] }} , b: {{ $data['emp_hire_date_female_15'] }} },
                                ],
                                xkey: 'y',
                                ykeys: ['a', 'b'],
                                labels: ['Number of Males', 'Number of Females']
                            });
                        </script>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Average salary for each department</h4>
                            <p class="category">The comparison of salaries in each department</p>
                        </div>
                        <div id="bar-chart"></div>
                        <script>
                            new Morris.Bar({
                                // ID of the element in which to draw the chart.
                                element: 'bar-chart',
                                // Chart data records -- each entry in this array corresponds to a point on
                                // the chart.
                                data: [

                                    { department: 'Customer Service', value: {{ $data['dept_avg_salary_1'] }} },
                                    { department: 'Development', value: {{ $data['dept_avg_salary_2'] }} },
                                    { department: 'Finance', value: {{ $data['dept_avg_salary_3'] }} },
                                    { department: 'Human Resources', value: {{ $data['dept_avg_salary_4'] }} },
                                    { department: 'Marketing', value: {{ $data['dept_avg_salary_5'] }} },
                                    { department: 'Production', value: {{ $data['dept_avg_salary_6'] }} },
                                    { department: 'Quality Management', value: {{ $data['dept_avg_salary_7'] }} },
                                    { department: 'Research', value: {{ $data['dept_avg_salary_8'] }} },
                                    { department: 'Sales', value: {{ $data['dept_avg_salary_9'] }} },

                                ],
                                // The name of the data record attribute that contains x-values.
                                xkey: 'department',
                                // A list of names of data record attributes that contain y-values.
                                ykeys: ['value'],
                                // Labels for the ykeys -- will be displayed when you hover over the
                                // chart.
                                labels: ['Value'],

                                barColors: function (row, series, type) {
                                    //console.log("--> "+row.label, series, type);
                                    if(row.label == "Customer Service") return "#009bff";
                                    else if(row.label == "Development") return "#ff0038";
                                    else if(row.label == "Finance") return "#fffc00";
                                    else if(row.label == "Human Resources") return "#000000";
                                    else if(row.label == "Marketing") return "#ff00a2";
                                    else if(row.label == "Production") return "#00a0ff";
                                    else if(row.label == "Quality Management") return "#ad5600";
                                    else if(row.label == "Research") return "#42ff00";
                                    else if(row.label == "Sales") return "#9100ad";
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection