<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper azul">
            <div class="row">
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="side-nav fixed">
                    <div class="user-view">
                        <h5 class="white-text">TOG ADM</h5>
                        <div class="background">
                            <img src="{{ asset('images/admin-back.jpg')}}"/>
                        </div>
                    </div>

                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="collapsible-header waves-effect waves-teal grey-text">Gestão de Usuários<i class="large material-icons">accessibility</i></a>
                        <div class="collapsible-body">
                          <ul>
                            <li><a href="{{route('admin.usuarios')}}">Ver Usuarios</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>  
                    <li><div class="divider"></div></li>
                    <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-teal grey-text">Gestão de Categorias<i class="large material-icons">apps</i></a>
                        <div class="collapsible-body">
                          <ul>
                            <li><a href="{{route('admin.categoria')}}">Ver Categorias</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>  
                    <li><div class="divider"></div></li>
                    <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-teal grey-text">Gestão de Esforços<i class="large material-icons">developer_board</i></a>
                        <div class="collapsible-body">
                          <ul>
                            <li><a href="{{route('esforco.todos')}}">Ver Esforços</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>  
                    <li><div class="divider"></div></li>
                    <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-teal grey-text">Gestão de Empresas<i class="large material-icons">business</i></a>
                        <div class="collapsible-body">
                          <ul>
                            <li><a href="{{route('admin.empresa')}}">Ver Empresas</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>  
                    <li><div class="divider"></div></li>
                    <li><a href="{{route('home')}}">Voltar para o site</a></li>
            </div>
        </div>
    </nav>
</div>



