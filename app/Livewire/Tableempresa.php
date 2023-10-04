<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empresa;
class Tableempresa extends Component
{
    public function apagar($id){
    
        Empresa::findOrfail($id)->delete();
        $this->modal_s('Parabêns', 'Empresa deletado com sucesso');
    }
  
    public function render()
    {
        $aux= Empresa::all();
        return view('livewire.tableempresa', compact('aux'));
    }
}
