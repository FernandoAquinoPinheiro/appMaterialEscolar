<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\tblMaterialEscolar;
use Illuminate\Suport\Facades\Redirect;
use Illuminate\Support\Facades\Validate;

class TblMaterialEscolarController extends Controller
{

    // PARA MOSTRAR TELA ADMINISTRATIVA
    public function MostrarHome()
    {
        return view('homeadm');
    }

    //Mostrar tela cadastro
    public function MostrarCadastroMaterial()
    {
        return view('cadastromaterial');
    }
    
    //para salvar os registros na tabela Material escolar
    public function CadastrarMaterial(Request $request)
    {
        
        $registros =$request->validate([
            'nomeMaterial' =>'string|required',
            'categoriaMaterial' =>'string|required',
            'dataCompraMaterial' =>'date|required',
            'preçoMaterial' =>'decimal|required'
        ]);

        TblMaterialEscolar::create($registros);
        return Redirect::route(home-adm);
    }
}
