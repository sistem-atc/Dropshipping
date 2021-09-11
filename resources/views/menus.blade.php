<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Menu Sistema</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ url ('assets/images/icons/favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ url ('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url ('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ url ('assets/css/templatemo-klassy-cafe.css')}}">
    <link rel="stylesheet" href="{{ url ('assets/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{ url ('assets/css/lightbox.css')}}">
    
    <script type="text/javascript" src="{{ url ('assets/js/jQuery.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/jquery.maskMoney.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/functions.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/jquery-2.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/owl-carousel.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/accordions.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/datepicker.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/scrollreveal.min.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/imgfix.min.js')}}"></script> 
    <script type="text/javascript" src="{{ url ('assets/js/slick.js')}}"></script> 
    <script type="text/javascript" src="{{ url ('assets/js/lightbox.js')}}"></script> 
    <script type="text/javascript" src="{{ url ('assets/js/isotope.js')}}"></script> 
    <script type="text/javascript" src="{{ url ('assets/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/jquery.mask.min.js')}}"></script>  
    
  </head>
  <body>
      <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                      <a href="/" class="logo">
                        <img src="{{ url ('assets/images/img-menu.png')}}" align="klassy cafe html template">
                      </a>
                      <ul class="nav">
                        <li class="submenu">
                          <a href="javascript:;">Menus</a>
                          <ul>
                            <li class="scroll-to-section"><a href="/" class="active">Dashboard</a></li>
                            @if (Session::get('AuthML') == 'New')
                              <li class="scroll-to-section"><a href="{{ route('prepare.login') }}" class="active">Autenticar ML</a></li>
                            @elseif (Session::get('AuthML') == 'Renew')
                              <li class="scroll-to-section"><a href="{{ route('refresh.token') }}" class="active">Renovar ML</a></li>
                            @endif
                          </ul>
                        </li> 
                        @if (Session::get('estoque'))
                          <li class="submenu">
                            <a href="javascript:;">Estoque</a>
                            <ul>
                              <li><a href="{{ route('estoque') }}">Entrada de Estoque</a></li>
                            </ul>
                          </li>
                        @endif
                        @if (Session::get('pedidos')) 
                          <li class="submenu">
                            <a href="javascript:;">Pedidos</a>
                            <ul>
                              <li><a href="{{ route('pedidos') }}">Pedidos Mercado Livre</a></li>
                            </ul>
                          </li>
                        @endif
                        @if (Session::get('anuncios'))
                          <li class="submenu">
                            <a href="javascript:;">Anuncios</a>
                            <ul>
                              <li><a href="{{ route('anuncios') }}">Anuncios Mercado Livre</a></li>
                            </ul>
                          </li>
                        @endif
                        @if (Session::get('mensagensSellers') or Session::get('mensagensML'))
                        <li class="submenu">
                          <a href="javascript:;">Atendimentos</a>
                          <ul>
                            @if (Session::get('mensagensSellers'))
                            <li><a href="{{ route('atendimentosSellers') }}">Mensagens Sellers</a></li>
                            @endif
                            @if (Session::get('mensagensML'))
                            <li><a href="{{ route('atendimentosML') }}">Mensagens Mercado Livre</a></li>
                            @endif
                          </ul>
                        </li> 
                        @endif
                        @if (Session::get('relatov'))
                          <li class="submenu">
                            <a href="javascript:;">Relatórios</a>
                            <ul>
                              <li><a href="{{ route('relatoriovendas') }}">Controle de Vendas</a></li>
                            </ul>
                          </li>
                        @endif
                        @if (Session::get('register') or Session::get('cadastroA') or Session::get('cadastroS') or Session::get('roles') or Session::get('cadastroP'))
                        <li class="submenu">
                          <a href="javascript:;">Cadastros</a>
                          <ul>
                            @if (Session::get('register') and Auth::user()->paper === 1)
                            <li><a href="{{ route('register') }}">Empresas</a></li>
                            @endif
                            @if (Session::get('cadastroA'))
                            <li><a href="{{ route('cadastroA') }}">Usuários</a></li>
                            @endif
                            @if (Session::get('cadastroS'))
                            <li><a href="{{ route('cadastroS') }}">Sellers</a></li>
                            @endif
                            @if (Session::get('roles'))
                            <li><a href="{{ route('roles') }}">Regras de Acessos</a></li>
                            @endif
                            @if (Session::get('cadastroP'))
                            <li><a href="{{ route('cadastroP') }}">Produtos</a></li>
                            @endif
                          </ul>
                        </li>
                        @endif
                          <li class="scroll-to-section">
                            <a class="scroll-to-section" href="{{ route('logout') }}">Sair</a>
                          </li> 
                      </ul>        
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id="top">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div> 
  </body>
</html>