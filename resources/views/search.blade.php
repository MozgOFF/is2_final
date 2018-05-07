@extends('layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="input-group">
                    <input type="text" name="search" id="search" class="form-control"
                    placeholder="I can help you to find anything you want!">
                    <div class="input-group-addon" ><i class="fa fa-search"></i></div>
                </div>
                <h3 class="text-center">Total Data : <span id="total_records"></span></h3>
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
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function () {

        fetch_data();

        function fetch_data(query = '') {
            $.ajax({
                url:"{{route('search.action')}}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function (data) {
                    $('tbody').html(data.table_data);
                    $('#total_records').text(data.total_data);
                }
            })
        }

        $(document).on('keyup', '#search', function () {
            var query = $(this).val();
            fetch_data(query);
        });

        $('#pagination a').on('click', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');
            $.data(url, $('#search').serialize(), function(data){
                $('tbody').html(data.table_data);
            });
        });

    });
    </script>
@endsection