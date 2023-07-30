<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class Userform extends Component
{
    public $user;
    public $password;

    protected $listeners = [
        'edit'
    ];

    protected $messages = [
        'user.name.required' => 'Il campo nome non può essere vuoto.',
    ];

    protected function rules() 
    {
       return [
            'user.name'=> 'required',
            'user.email'=> 'required|email|unique:users,email,' .$this->user->id,
            'password'=> 'required',
        ];
    } 

    public function mount()
    {
        $this->newUser();
    }

    public function store()
    {
        $this->validate();

        $this->user->password = \Illuminate\Support\Facades\Hash::make($this->password);

        $this->user->save();


        session()->flash('success', 'Utente salvato correttamente');

        $this->newUser();

        $this->emitTo('users-list', 'loadUsers');
    }

    public function newUser()
    {
        $this->user = new \App\Models\User;
        $this->password = '';
    }
    
    public function edit($user_id)
    {
        $this->user = \App\Models\User::find($user_id);
        $this->password = '';
    }

    public function render()
    {
        return view('livewire.userform');
    }
}
