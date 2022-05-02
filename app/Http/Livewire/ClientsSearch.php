<?php

namespace App\Http\Livewire;

use Livewire\Component;

//追加
use App\Models\Client;
use App\Models\Status;

class ClientsSearch extends Component
{
    public $clients, $campany_name, $manager, $phone_number, $client_email , $status_id, $client_id;
    public $isOpen=false;
    public $statuses;

    public function render()
    {
        $this->clients = Client::all();
        $this->statuses = Status::all();
        
        return view('livewire.clients-search');
    }
}
