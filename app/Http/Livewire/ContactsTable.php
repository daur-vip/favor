<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactsTable extends Component
{
    public $contacts;

    public $user;

    public $inFavorites = [];

    public $yoyo = array();

    public function render()
    {
        return view('livewire.contacts-table');
    }

    public function updatedInFavorites($value)
    {
        $this->yoyo = $value;
    }
}
