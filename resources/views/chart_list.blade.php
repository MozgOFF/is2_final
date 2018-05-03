@extends('layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
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

                            {{--var data = JSON.parse({!! $employeesChart!!});--}}


                            {{--var morrisData = [];--}}

                            {{--$.each(data, function(key, val){--}}
                                {{--morrisData.push({'Answer': key.split('Answer')[1], 'Count' : val});--}}
                            {{--});--}}

                            new Morris.Bar({
                                // ID of the element in which to draw the chart.
                                element: 'myfirstchart',
                                // Chart data records -- each entry in this array corresponds to a point on
                                // the chart.
                                data: [

                                    { gender: 'Male', value: {{ $employeesChartMale }} },
                                    { gender: 'Female', value: {{ $employeesChartFemale }} }

                                ],



                                // The name of the data record attribute that contains x-values.
                                xkey: 'gender',
                                // A list of names of data record attributes that contain y-values.
                                ykeys: ['value'],
                                // Labels for the ykeys -- will be displayed when you hover over the
                                // chart.
                                labels: ['Value'],

                                barColors: function (row, series, type) {
                                    //console.log("--> "+row.label, series, type);
                                    if(row.label == "Male") return "#0088de";
                                    else if(row.label == "Female") return "#ad3d7a";}
                            });
                        </script>
                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle" style="color: #0088de"></i> Male
                                <i class="fa fa-circle" style="color: #ad3d7a"></i> Female
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection