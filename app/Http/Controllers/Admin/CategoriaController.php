<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Esforco;

class CategoriaController extends Controller
{
    public function index(){
        $registros = Categoria::all();
        return view('admin.categoria.index',compact('registros'));
    }
    public function adicionar(){
        return view('admin.categoria.adicionar');
    }
    public function salvar(Request $request){
        $dados = $request->all();
        
        $registro = new Categoria();
        $registro->categoria = $dados['categoria'];
        
        $registro->save();
        
        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        
        return redirect()->route('admin.categoria');
        
    }
    public function editar($id){
        $registro = Categoria::find($id);
        return view('admin.categoria.editar', compact('registro'));

    }
    public function atualizar(Request $request, $id){
        $registro = Categoria::find($id);
        $dados = $request->all();
        $registro->categoria = $dados['categoria'];
        $registro ->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.categoria');
        
    }
    public function deletar($id){
        if(Esforco::where('categoria_id','=',$id)->count()){
            
            $msg = "Não é possível deletar essa Categoria! Esses esforcos (";
            $esforcos = Esforco::where('categoria_id','=',$id)->get();

            foreach ($esforcos as $esforco) {
                $msg .= "Esforço:".$esforco->nome." ";
            }
            $msg .= ") estão relacionados.";

            \Session::flash('mensagem',['msg'=>$msg,'class'=>'red white-text']);
            return redirect()->route('admin.categoria');
        }

        Categoria::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.categoria');


    }
}
