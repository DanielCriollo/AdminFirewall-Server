<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\IpAddress;

class ConfFirewall1Component extends Component
{

    public $ipe;

    public function render()
    {

        $ip=IpAddress::where('name','=','fw1')->first();
        
        return view('livewire.conf-firewall1-component',[
            'ip'=>$ip
        ]);
    }

    public function storeIp(){

    }

    public function editIp(){

    }

    public function updateIp(){

    }
}
