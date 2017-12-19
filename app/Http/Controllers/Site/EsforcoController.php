<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Esforco;
use App\Categoria;
use Carbon\Carbon;

class EsforcoController extends Controller
{
    public function index($id){
        $esforco = Esforco::find($id);
        return view('site.detalhe-esforco',compact('esforco'));
    }
    
    public function pesquisar(Request $request)
    {
    	$busca = $request->all();
    	

    	$paginacao = false;
    	$categorias = Esforco::orderBy('categoria_id')->get();
        $esforco = Esforco::orderBy('nome')->get();
        $local = Esforco::orderBy('local')->get();

    	if($busca['categoria_id'] == 'Todas Categorias'){
    		$testeCategoria = [
    			['categoria_id','<>',null]
    		];
    	}else{
    		$testeCategoria = [
    			['categoria_id','=',$busca['categoria_id']]
    		];
    	}
    	
    	if($busca['local'] != ''){
    		$testeCidade = [
    			['local','like','%'.$busca['local'].'%']
    		];
    	}else{
    		$testeCidade = [
    			['local','<>',null]
    		];
    	}
    	if($busca['nome'] != ''){
    		$testeNome = [
    			[strtolower('nome'),'like','%'.$busca['nome'].'%']
    		];
    	}else{
    		$testeNome = [
    			['nome','<>',null]
    		];
    	}


    	$esforcos = Esforco::where($testeCidade)
    	->where($testeNome)
    	->where($testeCategoria)
    	->orderBy('id','desc')->get();



    	return view('site.pesquisar',compact('categorias','paginacao','esforcos'));
    }

}
