<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view('status.index', ['statuses' => $statuses]);
    }

    public function all_update(Request $request)
    {
        $names = $request->name;

        $result = array();

        for($i = 1; $i < 6; $i++){
            //array_chunk() 配列を指定したサイズで分割する関数
            $name = array_chunk($names, 1)[$i-1];
            $result[] = array('id'=>$i, 'name'=>$name[0]);
        }

        echo "<pre>";
        print_r($result);   
        echo "</pre>"; 
        Status::upsert($result, ['name']);

        return redirect('/status');
    }
}
