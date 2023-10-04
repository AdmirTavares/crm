<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empresa;
use App\Models\User;

class Cdashboard extends Component
{
    public function render()
    {
        $total_user = User::count();
        $total_empresas = Empresa::count();
        return view('livewire.cdashboard', compact('total_user', 'total_empresas'));
    }
}
