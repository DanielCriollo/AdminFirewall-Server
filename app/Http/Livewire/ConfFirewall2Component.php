<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\IpAddress;

class ConfFirewall2Component extends Component
{

    public $ip, $ip_id;
    public $updateMode = false;

    public function render()
    {

        $ipe=IpAddress::where('name','=','fw1')->first();

        return view('livewire.conf-firewall2-component',[
            'ipe'=>$ipe
        ]);
    }

    public function storeIp(){

        $validatedDate = $this->validate([
            'ip' => 'required'
        ]);

        $data=[
            "name"=>"fw1",
            "ip"=>$this->ip,
            "interface"=>'enp0s3'
        ];

        IpAddress::create($data);

        $this->emit('ipStore');
    }

    public function editIp($id){

        $this->updateMode = true;

        $id = IpAddress::where('id',$id)->first();

        $this->ip_id = $id->id;

        $this->ip= $id->ip;

    }

    public function updateIp(){

        $validatedDate = $this->validate([

            'ip' => 'required'
        ]);

        IpAddress::where('id','=',$this->ip_id)->update($validatedDate);
        
        $this->updateMode = false;

        $this->resetInputFields();

    }

    public function cancel(){

        $this->updateMode = false;

        $this->resetInputFields();

    }

    private function resetInputFields(){

        $this->ip = '';



    }

}
