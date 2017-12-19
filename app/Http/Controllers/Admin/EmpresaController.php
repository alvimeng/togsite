<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empresa;

class EmpresaController extends Controller
{
    public function index(){
        $registros = Empresa::all();
        return view('admin.empresa.index',compact('registros'));
    }
    public function adicionar(){
        return view('admin.empresa.adicionar');
    }
    public function salvar(Request $request){
        $dados = $request->all();
        
        $registro = new Empresa();
        $registro->empresa = $dados['empresa'];
        $registro->cnpj = $dados['cnpj'];
        $registro->endereco = $dados['endereco'];
        $registro->telefone = $dados['telefone'];
        $registro->email = $dados['email'];
        $registro->responsavel = $dados['responsavel'];
        $registro->save();
        
        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        
        return redirect()->route('admin.empresa');
        
    }
    public function editar($id){
        $registro = Empresa::find($id);
        return view('admin.empresa.editar', compact('registro'));

    }
    public function atualizar(Request $request, $id){
        $registro = Empresa::find($id);
        $dados = $request->all();
        $registro = new Empresa();
        $registro->empresa = $dados['empresa'];
        $registro->cnpj = $dados['cnpj'];
        $registro->endereco = $dados['endereco'];
        $registro->telefone = $dados['telefone'];
        $registro->email = $dados['email'];
        $registro->responsavel = $dados['responsavel'];
        $registro ->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.empresa');
        
    }
    public function deletar($id){
        Empresa::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.empresa');
    }
}
