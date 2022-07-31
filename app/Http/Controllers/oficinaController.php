<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mecanico;
use App\Models\phone;
Use Illuminate\Support\Facades\DB;


class oficinaController extends Controller
{
    public function index(){

        return view('index.blade.php');
    }

    public function adicionar(){

       $mecanico=new mecanico();
       $mecanico->nome="Elso Domingos";
       $mecanico->morada="Achada Monte";
       $mecanico->email="elsoDomingos@gmail.com";
       $mecanico->save();
       echo "Ok";
    }

   public function show(){

     $dados=mecanico::get();

     return view('show', compact('dados'));

   }

   public function update(){

        $mecanico=mecanico::where('id',2)->first();
        $mecanico->nome="Edson Miranda";
        $mecanico->email="edson@gmail.com";
        $mecanico->morada="Achada Monte";
        $mecanico->update();
   }


   public function delete(){

        $mecanico = mecanico::where('id',3)->first();
        $apagado=$mecanico->delete();

        if($apagado){

            echo "Mecânico apagado com sucesso";
        }else{

            echo "Falha";
        }
   }


   public function mostrar_mecanico(){

    $all_mecanico= mecanico::with('rPhone')->get();

    return view('todoMecanico',compact('all_mecanico'));
   }
}
