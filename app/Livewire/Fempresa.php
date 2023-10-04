<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use \App\Models\Empresa;

class Fempresa extends Component
{
    #[rule('required|max:18')]
    public $cnpj = '';

    #[rule('required|max:60')]
    public $razao_social = '';


    public function registrar_empresa()
    {
        sleep(2);
        $aux = $this->validate();

         Empresa::create($aux);
         $this->reset('cnpj','razao_social');
        $this->modal_s('Parabêns','A sua Empresa foi registrada com sucesso!');

    }


    public function render()
    {
        return view('livewire.fempresa');
    }
}
