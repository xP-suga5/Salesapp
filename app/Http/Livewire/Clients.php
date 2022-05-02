<?php

namespace App\Http\Livewire;

use Livewire\Component;
//追加
use App\Models\Client;
use App\Models\Status;

class Clients extends Component
{
    public $clients, $campany_name, $manager, $phone_number, $client_email , $status_id, $client_id;
    public $isOpen=false;
    public $statuses;

    public function render()
    {
        $this->clients = Client::all();
        
        return view('livewire.clients');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function resetInputFields()
    {
        $this->campany_name = '';
        $this->manager = '';
        $this->phone_number = '';
        $this->client_email = '';
        $this->status_id = 1;
    }

    public function store()
    {
        $this->validate([
            'campany_name' => 'required',
            'manager' => 'required',
            'status_id' => 'required'
        ]);

        Client::updateOrCreate(['id' => $this->client_id], 
        [
            'campany_name' => $this->campany_name,
            'manager' => $this->manager,
            'phone_number' => $this->phone_number,
            'client_email' => $this->client_email,
            'status_id' => $this->status_id,
        ]);
        session()->flash('message', 
            $this->client_id ? 'Client Updated Successfully.' : 'Client Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        $this->client_id = $client->id;
        $this->campany_name = $client->campany_name;
        $this->manager = $client->manager;
        $this->phone_number = $client->phone_number;
        $this->client_email = $client->client_email;
        $this->status_id = $client->status_id;
        
        $this->openModal();
    }

    public function delete($id)
    {
        Client::find($id)->delete();
        session()->flash('message', 'Todo Deleted Successfully.');
    }
}
