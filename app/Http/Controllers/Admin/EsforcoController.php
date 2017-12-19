<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Esforco;
use App\User;
use App\Categoria;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;
use App\Http\Requests\EsforcoRequest;


class EsforcoController extends Controller
{
    public function index(){
        $registros  =  Esforco::where('dono', Auth::id())->get();
        return view('admin.esforco.index',compact('registros'));
        
    }
    public function adicionar(){
        $categorias = Categoria::all();
        return view('admin.esforco.adicionar', compact('categorias'));
    }
    public function salvar(EsforcoRequest $request){
        $dados = $request->all();
        $registro = new Esforco();
        
        $registro->nome = $dados['nome'];
        $registro->descricao = $dados['descricao'];
        $registro->categoria_id = $dados['categoria_id'];
        $registro->cidade= $dados['cidade'];
        $registro->complemento= $dados['complemento'];
        $registro->local_exclusivo= $dados['local_exclusivo'];
        $registro->local= ($dados['cidade']." ".$dados['complemento']);
        $registro->inicio = Carbon::now();
        $registro->termino = Carbon::createFromFormat('d/m/Y', $dados['termino']);
        $registro->maxparticipantes= $dados['maxparticipantes'];
        $registro->minparticipantes= $dados['minparticipantes'];                
        $file = $request->file('imagem');
    	if($file){

            $rand = rand(11111,99999);
    		$diretorio = "images/esforco/".str_slug($dados['nome'],'-');
    		$ext = $file->guessClientExtension();
            $nomeArquivo = "img".$rand.".".$ext;
            if (!file_exists($diretorio)) {
                File::makeDirectory($diretorio, 0755, true);
            }
    		$file->move($diretorio,$nomeArquivo);
            $registro->imagem = $diretorio.'/'.$nomeArquivo;    
       }
        $registro->dono = Auth::user()->id;        
        
        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);

        return redirect()->route('esforco');
    }
    public function editar($id)
    {
        $registro = Esforco::find($id);
        $categorias = Categoria::all();

        return view('admin.esforco.editar',compact('registro','categorias'));
    }
    public function atualizar(Request $request, $id)
    {
        $registro = Esforco::find($id);
        $dados = $request->all();
        
        $registro->nome = $dados['nome'];
        $registro->descricao = $dados['descricao'];
        $registro->categoria_id = $dados['categoria_id'];
        $registro->cidade= $dados['cidade'];
        $registro->complemento= $dados['complemento'];
        $registro->local_exclusivo= $dados['local_exclusivo'];
        $registro->local= ($dados['cidade']." ".$dados['complemento']);
        $registro->termino = Carbon::createFromFormat('d/m/Y', $dados['termino']);
        $registro->maxparticipantes= $dados['maxparticipantes'];
        $registro->minparticipantes= $dados['minparticipantes'];        
        $file = $request->file('imagem');
    	if($file){

            $rand = rand(11111,99999);
            $diretorio = "images/esforco/".str_slug($dados['nome'],'-');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img".$rand.".".$ext;
            if (!file_exists($diretorio)) {
                File::makeDirectory($diretorio, 0755, true);
            }
            $file->move($diretorio,$nomeArquivo);
            $registro->imagem = $diretorio.'/'.$nomeArquivo;    
        }
        $registro ->update();
            
        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('esforco');
    }

    
    public function deletar($id)
    {
        
        Esforco::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);
        return redirect()->route('esforco.todos');

    }
    public function listartodos(){
        $registros  =  Esforco::all();
        return view('admin.esforco.listartodos',compact('registros'));
        
    }
            
}
