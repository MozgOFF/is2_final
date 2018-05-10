<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearch extends Controller
{
    public function action(Request $request)
    {
        $output = '';
        if ($request->ajax()) {
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('dept_manager')
                    ->where('emp_no', 'like', '%'.$query.'%')
                    ->orWhere('dept_no', 'like', '%'.$query.'%')
                    ->orWhere('from_date', 'like', '%'.$query.'%')
                    ->orWhere('to_date', 'like', '%'.$query.'%')
                    ->get();
            } else {
                $data = DB::table('dept_manager')
                    ->orderBy('emp_no', 'desc')
                    ->get();
            }
            $total_row = $data->count();
            $output = '';
            if ($total_row > 0) {
                //$output = ''.$data->render().'';
                foreach ($data as $row) {
                    $output .= '
                <tr>
                    <td>'.$row->emp_no.'</td>
                    <td>'.$row->dept_no.'</td>
                    <td>'.$row->from_date.'</td>
                    <td>'.$row->to_date.'</td>
                </tr>
                ';
                }
            } else {
                $output .= '
                <tr>
                    <td class="text-center">No data found</td>
                </tr>
                ';
            }
            $data = array (
                'table_data' => $output,
                'total_data' => $total_row
            );

            echo json_encode($data);
        }
    }
}