<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mikehaertl\shellcommand\Command;

class ReglasController extends Controller
{
    //

    public function index(){
        return view('reglas');
    }

    public function storeComando(Request $request){
    
        $comando=request('comando');
    /*
        return view('resultado-reglas',['reglas'=>$reglas])->header('Content-Type', 'text/plain');
        */

        
        $command = new Command($comando);
        if ($command->execute()) {
            $resultado = $command->getOutput();
            $reglas=explode("\n",$resultado);
            dd($reglas);
            return view('resultado-reglas',['reglas'=>$reglas]);

        } else {
            return $command->getError();
            $exitCode = $command->getExitCode();
        }
    }
}
