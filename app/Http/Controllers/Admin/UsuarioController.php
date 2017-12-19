<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
    	$dados = $request->all();
    	
    	if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])  ){
            return redirect()->route('home');
        }
    	return redirect()->route('admin.login');
    }
    public function sair() {
	Auth::logout();
	return redirect()->route('home');	
    }
    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index',compact('usuarios'));
    }
    public function adicionar()
    {
        return view('admin.usuarios.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $usuario = new User();
        $usuario->name = $dados['name'];
        $usuario->lastname = $dados['lastname'];
        $usuario->email = $dados['email'];
        $usuario->password = bcrypt($dados['password']);
        $usuario->nivel = 'usuario';
        $usuario->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.login');  
    }
    public function editar($id)
    {            
        $usuario = User::find($id);
        return view('admin.usuarios.editar', compact('usuario'));

    }
    public function atualizar(Request $request, $id)
    {
        $registro = User::find($id);
        $dados = $request->all();

        $registro->name = $dados['name'];
        $registro->lastname = $dados['lastname'];
        $registro->email = $dados['email'];
        $registro->phone = $dados['phone'];
        $registro->cpf = $dados['cpf'];
        $registro->cep= $dados['cep'];
        $registro->rua= $dados['rua'];
        $registro->numero= $dados['numero'];
        $registro->complemento= $dados['complemento'];
        $registro->cidade= $dados['cidade'];
        $registro->estado= $dados['estado'];

        $file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/usuarios/".str_slug($dados['name'],'_');
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.'/'.$nomeArquivo;
    	}
        
        
        if(isset($dados['password']) && strlen($dados['password']) > 5 ){
            $dados['password'] = bcrypt($dados['password']);
        }else{
            unset($dados['password']);
        }

        $registro ->update();
        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.usuarios');
    }
    public function deletar($id)
    {
        User::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.usuarios');
    }
    public function cadastro($id)
    {            
        $usuario = User::find($id);
        return view('admin.cadastros.index', compact('usuario'));

    }
    
    public function cadastro_atualizar(Request $request, $id)
    {
        $registro = User::find($id);
        $dados = $request->all();
        
        $registro->name = $dados['name'];
        $registro->lastname = $dados['lastname'];        
        $registro->phone = $dados['phone'];
        $registro->cpf = $dados['cpf'];
        $registro->cep= $dados['cep'];
        $registro->rua= $dados['rua'];
        $registro->numero= $dados['numero'];
        $registro->complemento= $dados['complemento'];
        $registro->cidade= $dados['cidade'];
        $registro->estado= $dados['estado'];

        $file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/usuarios/".str_slug($dados['name'],'_');
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.'/'.$nomeArquivo;
    	}
        
        $registro ->update();


        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.cadastro', $id);
    }
}
