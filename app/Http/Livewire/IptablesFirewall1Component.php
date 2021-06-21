<?php

namespace App\Http\Livewire;

use Livewire\Component;
use mikehaertl\shellcommand\Command;

class IptablesFirewall1Component extends Component
{
    public function render()
    {
        $reglas1=[];
        $reglas2=[];
        $error='';

        $comando1='sudo iptables -L --line-numbers';

        $comando2='sudo iptables -L -t nat --line-numbers';
            
        $command1 = new Command($comando1);
        if ($command1->execute()) {
            $resultado1 = $command1->getOutput();
            $reglas1=explode("\n",$resultado1);
               
    
        } else {
            $error= $command1->getError();
            $exitCode = $command1->getExitCode();
        }

        //

        $command2 = new Command($comando2);
        if ($command2->execute()) {
            $resultado2 = $command2->getOutput();
            $reglas2=explode("\n",$resultado2);
               
    
        } else {
            $error= $command2->getError();
            $exitCode = $command2->getExitCode();
        }

        return view('livewire.iptables-firewall1-component',['reglas1'=>$reglas1,'reglas2'=>$reglas2]);
    }
}
