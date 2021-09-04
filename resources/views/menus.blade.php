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
    <script type="text/javascript" src="https://unpkg.com/popper.js@1.16.1/dist/umd/popper.min.js"></script>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
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
                        <!-- style="display:none;" Ocultar a Tag, incluir regra de validação pelo login -->
                        <li class="submenu">
                          <a href="javascript:;">Menus</a>
                          <ul>
                            <li class="scroll-to-section"><a href="/" class="active">Dashboard</a></li>
                            <li class="scroll-to-section"><a href="{{ route('prepare.login') }}" target="blank" class="active">Autenticar ML</a></li>
                          </ul>
                        </li> 
                        <li class="submenu">
                          <a href="javascript:;">Estoque</a>
                          <ul>
                            <li><a href="{{ route('estoque') }}">Entrada de Estoque</a></li>
                          </ul>
                        </li>  
                        <li class="submenu">
                          <a href="javascript:;">Pedidos</a>
                          <ul>
                            <li><a href="{{ route('pedidos') }}">Pedidos Mercado Livre</a></li>
                          </ul>
                        </li> 
                        <li class="submenu">
                          <a href="javascript:;">Anuncios</a>
                          <ul>
                            <li><a href="{{ route('anuncios') }}">Anuncios Mercado Livre</a></li>
                          </ul>
                        </li>
                        <li class="submenu">
                          <a href="javascript:;">Atendimentos</a>
                          <ul>
                            <li><a href="{{ route('atendimentosSellers') }}">Mensagens Sellers</a></li>
                            <li><a href="{{ route('atendimentosML') }}">Mensagens Mercado Livre</a></li>
                          </ul>
                        </li>     	
                        <li class="submenu">
                          <a href="javascript:;">Relatórios</a>
                          <ul>
                            <li><a href="{{ route('relatoriovendas') }}">Controle de Vendas</a></li>
                          </ul>
                        </li>
                        <li class="submenu">
                          <a href="javascript:;">Cadastros</a>
                          <ul>
                            <li><a href="{{ route('register') }}">Empresas</a></li>
                            <li><a href="{{ route('cadastroA') }}">Administradores</a></li>
                            <li><a href="{{ route('cadastroS') }}">Sellers</a></li>
                            <li><a href="{{ route('roles') }}">Regras de Acessos</a></li>
                            <li><a href="{{ route('cadastroP') }}">Produtos</a></li>
                          </ul>
                        </li>
                          <li class="scroll-to-section">
                            <a class="scroll-to-section" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                            </form>
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
    

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
            });
        });
    </script>
  </body>
</html>