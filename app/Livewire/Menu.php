<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Menu extends Component
{
    public function sair(){
        Auth::logout();
    }
    public function render()
    {
        
        return view('livewire.menu');
    }
}
