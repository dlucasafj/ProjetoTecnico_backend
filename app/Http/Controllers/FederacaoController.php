<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Federacao;

class FederacaoController extends Controller
{
    public function getFederacao(){

        $search = request('search');

        if($search){
            $federacao = Federacao::where([
                ['nome','like','%'.$search.'%']
            ])->get();

        }else{
            $federacao = Federacao::all();
        }


        return view('/federacao/listEmpresa',['federacao' => $federacao,'search'=>$search]);

    }


   public function create(){
       return view('federacao/create');
   }

   public function store(Request $request){
       $fed = new Federacao;

       $fed->nome = $request->nome;
       $fed->estado = $request->estado;

       $fed->save();

       return redirect('/home');
       
   }

   public function empresasjr(){
       
        $federacao = Federacao::where([
            ['nome','like','%'.$search.'%']
        ])->get();

        $empresas = $federacao->empresas;

        foreach($empresas as $empresa){
            echo $empresa->nome;
        }
   }

   public function lista(){
    return view('federacao/listEmpresa');
   }



}
