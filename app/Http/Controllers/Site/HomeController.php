<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Esforco;
use App\Categoria;

class HomeController extends Controller
{
    public function index(){
        $paginacao = true;
        $esforcos = Esforco::orderBy('id','desc')->paginate(10);
        $categorias = Categoria::all();
        return view('index',compact('esforcos','paginacao','categorias'));
    }
    public function categorias(){
        $categorias = Categoria::all();
        return $categorias;
    }
}
