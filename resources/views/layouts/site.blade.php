<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <title>@if( ! empty($esforco))
  {{$esforco->nome}} -
  @endif Tog</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    @if(!empty($esforco))

  <meta property="og:url"           content="{{route ('site.esforco',[$esforco->id,str_slug($esforco->nome,'-')])}}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="{{$esforco->nome}}" />
  <meta property="og:description"   content="{{$esforco->descricao}}" />
  <meta property="og:image"         content="{{$esforco->imagem}}" />
  @endif
    
</head>
<body id="app-layout">
    <nav>
    <div class="nav-wrapper menu-superior">
       <div class="container">
        <ul class="right hide-on-med-and-down">
                @if (Auth::check())
                    <li><a href="{{route ('esforco')}}">Meus projetos</a></li>
                    <li><a href="{{route ('admin.cadastro',Auth::user()->id)}}">Alterar Cadastro</a></li>
                    <li><a href="{{route ('admin.usuarios.sair')}}">Sair</a></li>
                    <li><a class="entrar"><i class="small material-icons left">perm_identity</i>Olá {{ Auth::user()->name}}</a></li>
                @if (Auth::user()->nivel == 'usuario')
                    <li><a href="{{route ('admin.principal')}}">Painel Administrativo</a></li>
                @endif
                @else
                    <li><a href="{{route ('admin.login')}}" class="entrar"><i class="small material-icons left">perm_identity</i>Entrar</a></li>
                    <li><a href="{{route ('admin.usuarios.adicionar')}}">Cadastre-se</a></li>
                @endif
        </ul>
           <ul class="menu-superior-mobile">
               @if (Auth::check())
                    <li><a class="dropdown-button entrar" href="#!" data-activates="dropdown1"><i class="small material-icons left">perm_identity</i>Olá {{ Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="{{route('esforco')}}">Meus projetos</a></li>
                        <li><a href="{{route ('admin.cadastro',Auth::user()->id)}}">Alterar Cadastro</a></li>
                        <li><a href="{{route ('admin.usuarios.sair')}}">Sair</a></li>
                    </ul>
                    
                @else
                    <li><a href="{{route ('admin.login')}}" class="entrar"><i class="small material-icons left">perm_identity</i>Entrar</a></li>
                    <li><a href="{{route ('admin.usuarios.adicionar')}}">Cadastre-se</a></li>
                @endif
               
           </ul>
        </div>
    </div>
        <div class="nav-wrapper white">
            <div class="container">
              <a href="{{route ('home')}}" class="brand-logo"><img class="responsive-img logo-tog" src="{{ asset('images/logo.png') }}" alt="Tog"/></a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="side-nav" id="mobile-demo">
                  <li><a  href="{{route('home')}}">home</a></li>
                  <li><a  href="{{route('quem-somos')}}">quem somos</a></li>
                  <li><a  href="{{route('perguntas-frequentes')}}!">perguntas frequentes</a></li>
                  <li><a  href="{{route('como-funciona')}}">como funciona</a></li>
              </ul>
              <div class="nav-content">
                    <div class="row">
                        <div class="col m7 offset-m2 menu-filtro">
                        @include('layouts._site._buscador')
                        </div>
                        <div class="col s12 menu-filtro-mobile">
                        @include('layouts._site._buscador-mobile')
                        </div>
                        <div class="col m3 s12" style="padding-top:10px">
                            <a href="{{ route ('esforco.novo')}}" class="call-action-verde">+ Criar projeto coletivo</a>
                        </div>
                    </div>
            </div>     
        </div>
         <nav>
            <div class="nav-wrapper blue-grey lighten-5 menu-navegar">
              <div class="container">
              <div class="col s12">
                    <a href="{{route('home')}}">home</a>
                    <a href="{{route('quem-somos')}}">quem somos</a>
                    <a href="{{route('perguntas-frequentes')}}">perguntas frequentes</a>
                    <a href="{{route('como-funciona')}}">como funciona</a>
              </div>
            </div>
            </div>
          </nav>
    </nav>
    <main>
    @if(Session::has('mensagem'))
      <div class="container">
        <div class="row">
          <div class="card {{ Session::get('mensagem')['class'] }}">
            <div align="center" class="card-content">
              {{ Session::get('mensagem')['msg'] }}
            </div>
          </div>
        </div>
      </div>
    @endif  
    <div class="row">  
    @yield('content')
    </div>
  </main>      
     <footer class="page-footer azul">
          <div class="container">
            <div class="row" style="margin-bottom:0px">
              <div class="col l4 s12">
                <h5 class="white-text">Empresa</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="{{route('home')}}">home</a></li>
                  <li><a class="grey-text text-lighten-3" href="{{route('quem-somos')}}">quem somos</a></li>
                  <li><a class="grey-text text-lighten-3" href="{{route('perguntas-frequentes')}}">perguntas frequentes</a></li>
                  <li><a class="grey-text text-lighten-3" href="{{route('como-funciona')}}">como funciona</a></li>
                </ul>
              </div>
              <div class="col l4 s12">
                <h5 class="white-text">Atendimento</h5>
                <ul>
                  <li><a class="grey-text text-lighten-4" href="#!">Atendimento ao cliente</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Política de uso</a></li>
                </ul>
              </div>
              <div class="col l4 s12 social-footer">
                  <a href="#"><img src="{{ asset('images/facebook-icon.png') }}" class="icon-rodape"></a>
                  <a href="#"><img src="{{ asset('images/instagram-icon.png') }}" class="icon-rodape"></a>
                  <a href="#"><img src="{{ asset('images/twitter-icon.png') }}" class="icon-rodape"></a>

              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Todos direitos reservados
            </div>
          </div>
        </footer>
            

    <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11&appId=1005057816228518';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>