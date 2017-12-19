<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Páginas do Site*/
Route::get('/', ['as'=>'home', 'uses'=>'Site\HomeController@index']);
Route::get('/quem-somos', ['as'=>'quem-somos', function(){return view('quem-somos');}]);
Route::get('/como-funciona', ['as'=>'como-funciona', function(){return view('como-funciona');}]);
Route::get('/perguntas-frequentes', ['as'=>'perguntas-frequentes', function(){return view('perguntas-frequentes');}]);

/*Filtro dos Esforços*/
Route::get('/categorias', ['as'=>'categorias', 'uses'=>'Site\HomeController@categorias']);
Route::get('/pesquisar', ['as'=>'site.pesquisar', 'uses'=>'Site\EsforcoController@pesquisar']);



/*Página de Login*/
Route::get('/login',['as'=>'login', function(){return view('admin.login.index');}]);
Route::post('/login',['as'=>'admin.login', 'uses'=>'Admin\UsuarioController@login']);


/*Registrar Usuarios*/
Route::get('/registrar',['as'=>'admin.usuarios.adicionar', 'uses'=>'Admin\UsuarioController@adicionar']);
Route::post('/registrar/salvar-usuario',['as'=>'admin.usuarios.salvar', 'uses'=>'Admin\UsuarioController@salvar']);


/*Paginas protegidas do Login*/
Route::group(['middleware'=>'auth'], function(){
        /*Login e Logout*/
	Route::get('/admin',['as'=>'admin.principal', function(){return view('admin.principal.index');}]);
        Route::get('/sair',['as'=>'admin.usuarios.sair', 'uses'=>'Admin\UsuarioController@sair']);
        
        /*Cadastro de Informacoes*/
        Route::get('/cadastro/{id}', ['as'=>'admin.cadastro', 'uses'=>'Admin\UsuarioController@cadastro']);
        Route::put('/cadastro/atualizar/{id}', ['as'=>'admin.cadastro.atualizar', 'uses'=>'Admin\UsuarioController@cadastro_atualizar']);
        
        /*Usuarios - Adicionar atualizar e deletar*/
        Route::get('/admin/usuarios',['as'=>'admin.usuarios', 'uses'=>'Admin\UsuarioController@index']);
        Route::put('/admin/usuarios/atualizar/{id}',['as'=>'admin.usuarios.atualizar', 'uses'=>'Admin\UsuarioController@atualizar']);
        Route::get('/admin/usuarios/editar/{id}',['as'=>'admin.usuarios.editar', 'uses'=>'Admin\UsuarioController@editar']);
        Route::get('/admin/usuarios/deletar/{id}',['as'=>'admin.usuarios.deletar', 'uses'=>'Admin\UsuarioController@deletar']);
        
        /*Categoria - Adicionar Atualizar e Deletar*/
        Route::get('/admin/categoria',['as'=>'admin.categoria', 'uses'=>'Admin\CategoriaController@index']);
        Route::get('/admin/categoria/adicionar',['as'=>'admin.categoria.adicionar', 'uses'=>'Admin\CategoriaController@adicionar']);
        Route::post('/admin/categoria/salvar',['as'=>'admin.categoria.salvar', 'uses'=>'Admin\CategoriaController@salvar']);
        Route::get('/admin/categoria/editar/{id}',['as'=>'admin.categoria.editar', 'uses'=>'Admin\CategoriaController@editar']);
        Route::put('/admin/categoria/atualizar/{id}',['as'=>'admin.categoria.atualizar', 'uses'=>'Admin\CategoriaController@atualizar']);
        Route::get('/admin/categoria/deletar/{id}',['as'=>'admin.categoria.deletar', 'uses'=>'Admin\CategoriaController@deletar']);
        
        /*Esforco - Adicionar Atualizar e Deletar Tela do Usuario*/
        Route::get('/esforco',['as'=>'esforco', 'uses'=>'Admin\EsforcoController@index']);
        Route::get('/esforco/novo',['as'=>'esforco.novo', 'uses'=>'Admin\EsforcoController@adicionar']);
        Route::post('/esforco/salvar',['as'=>'esforco.salvar', 'uses'=>'Admin\EsforcoController@salvar']);
        Route::get('/esforco/editar/{id}',['as'=>'esforco.editar', 'uses'=>'Admin\EsforcoController@editar']);
        Route::put('/esforco/atualizar/{id}',['as'=>'esforco.atualizar', 'uses'=>'Admin\EsforcoController@atualizar']);
        Route::get('/esforco/deletar/{id}',['as'=>'esforco.deletar', 'uses'=>'Admin\EsforcoController@deletar']);
        Route::get('/admin/esforco',['as'=>'esforco.todos', 'uses'=>'Admin\EsforcoController@listartodos']);
        
        /*Empresas - Adicionar Atualizar e Deletar*/
        Route::get('/admin/empresa',['as'=>'admin.empresa', 'uses'=>'Admin\EmpresaController@index']);
        Route::get('/admin/empresa/adicionar',['as'=>'admin.empresa.adicionar', 'uses'=>'Admin\EmpresaController@adicionar']);
        Route::post('/admin/empresa/salvar',['as'=>'admin.empresa.salvar', 'uses'=>'Admin\EmpresaController@salvar']);
        Route::get('/admin/empresa/editar/{id}',['as'=>'admin.empresa.editar', 'uses'=>'Admin\EmpresaController@editar']);
        Route::put('/admin/empresa/atualizar/{id}',['as'=>'admin.empresa.atualizar', 'uses'=>'Admin\EmpresaController@atualizar']);
        Route::get('/admin/empresa/deletar/{id}',['as'=>'admin.empresa.deletar', 'uses'=>'Admin\EmpresaController@deletar']);
        
});
Route::get('/{id}/{nome?}', ['as'=>'site.esforco', 'uses'=>'Site\EsforcoController@index']);
