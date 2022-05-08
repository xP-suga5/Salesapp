<?php

namespace App\Http\Livewire;

use Livewire\Component;

//追加
use App\Models\Client;
use App\Models\Status;

class ClientsSearch extends Component
{
    public $clients, $campany_name, $manager;
    public $statuses;


    public $search;

    public $word = '';
    protected $queryString = [
        'word' => ['except' => ''],
        'search' => ['except' => ''],
    ];


    public function render()
    {
        $this->statuses = Status::all();

        $this->search();

        return view('livewire.clients-search', ['clients' => $this->clients]);
    }

    public function search()
    {
        //$word = $this->word;
        //$this->clients = Client::where('campany_name', 'like', '%'.$this->word.'%')->get();

        $search = $this->search;
        $this->clients = Client::where('campany_name', 'like', '%' . $this->search . '%')
        ->orWhere('manager', 'like', '%' . $this->search . '%')->get();
    }
}
