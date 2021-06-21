<?php

namespace App\Http\Livewire;

use Livewire\Component;
use mikehaertl\shellcommand\Command;

class CliFW1Component extends Component
{

    public $comando, $salida;
    public $updateMode = false;

    public function render()
    {

        return view('livewire.cli-fw1-component');
    }

    public function resetInput()
    {
        $this->comando = null;
        $this->salida = null;
    }

    public function store()
    {
        $command = new Command($this->comando);
        if ($command->execute()) {
            $resultado = $command->getOutput();
            $this->salida=$resultado;
            $this->emit('alert', ['type' => 'success', 'message' => 'Comando Ejecutado Correctamente.']);

        } else {
            $this->salida=$command->getError();

            $exitCode = $command->getExitCode();
            
            $this->emit('error',['type'=>'success','message'=>'Comando Ejecutado Con Errores']);
        }
    }
}
