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

            // $(window).on('hashchange', function() {
            //     if (window.location.hash) {
            //         var page = window.location.hash.replace('#', '');
            //         if (page == Number.NaN || page <= 0) {
            //             return false;
            //         }else{
            //             getData(page, data);
            //         }
            //     }
            // });
            //
            // $(document).on('click', '.pagination a', function(event)
            // {
            //     event.preventDefault();
            //     $('li').removeClass('active');
            //     $(this).parent('li').addClass('active');
            //     var myurl = $(this).attr('href');
            //     var page=$(this).attr('href').split('page=')[1];
            //     getData(page, data);
            // });
            //
            //
            // function getData(page){
            //     $.ajax(
            //         {
            //             url: '?page=' + page,
            //             type: "get",
            //             datatype: "html"
            //         })
            //         .done(function(data)
            //         {
            //             $('tbody').empty().html(data.table_data);
            //             $('#total_records').empty().text(data.total_data +101);
            //             location.hash = page;
            //         })
            //         .fail(function(jqXHR, ajaxOptions, thrownError)
            //         {
            //             alert('No response from server');
            //         });
            //
            //     }
        });
    </script>
@endsection