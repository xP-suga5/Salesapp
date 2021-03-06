<?php

namespace App\Http\Livewire;

use Livewire\Component;
//追加
use App\Models\Status;

class Statuses extends Component
{
    public $statuses, $name;

    public function render()
    {
        $this->statuses = Status::all();
        return view('livewire.statuses');
    }

    public function all_update($request)
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
