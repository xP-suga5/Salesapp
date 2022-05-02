<?php

namespace App\Http\Livewire;

use Livewire\Component;
//追加
use App\Models\Status;

class Statuses extends Component
{
    public $statuses, $name;
    public $isOpen=false;

    public function render()
    {
        $this->statuses = Status::all();
        return view('livewire.statuses');
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
}
