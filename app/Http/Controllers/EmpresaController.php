<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Federacao;

class EmpresaController extends Controller
{
    function getAllEmpresa(){

        $search = request('search');
        
        if($search){
            $empresa = Empresa::where([
                ['nome','like','%'.$search.'%']
            ])->get();

        }else{
            $empresa = Empresa::all();
        }


        return view('home',['empresa' => $empresa,'search'=>$search]);
    }

    public function create(){
        return view('empresas/create');
    }

    public function store(Request $request){
        $empresa = new Empresa;
        
        $empresa->nome = $request->nome;
       // $empresa->federacao_id = $request->federacao;
        
       $nome_fed = $request->federacao;

        $federacao = Federacao::where('nome','like','%'.$nome_fed.'%')->get()->first();

         if($federacao){
            $empresa->federacao_id = $federacao->id;

         }else{
             echo 'Erro';
        }
 
        $empresa->save();
 
        return redirect('/home');
        
    }

    
    

}
