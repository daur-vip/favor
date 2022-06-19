<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ContactsTable extends Component
{
    public $contacts;

    public $user;

    public $inFavorites = [];

    public $yoyo = array();

    public function mount()
    {
        $userId = Auth::id();
        $this->user = User::find($userId);
        $this->inFavorites = $this->user->contacts->pluck('id');
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.contacts-table');
    }

    public function updatedInFavorites($value)
    {
        $this->user->contacts()->sync($this->inFavorites);
    }
}
