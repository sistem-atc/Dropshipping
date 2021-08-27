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
                            <li class="scroll-to-section"><a href="/" class="active">Dashboard</a></li>
                            <li class="scroll-to-section"><a href="/estoque">Estoque</a></li>
                            <li class="scroll-to-section"><a href="/anuncios">Anuncios</a></li>
                            <li class="scroll-to-section"><a href="/pedidos">Pedidos</a></li>   
                        <li class="submenu">
                          <a href="javascript:;">Atendimentos</a>
                          <ul>
                            <li><a href="/mensagensSellers">Mensagens Sellers</a></li>
                            <li><a href="/mensagensMercadoLivre">Mensagens Mercado Livre</a></li>
                          </ul>
                        </li>     	
                        <li class="submenu">
                          <a href="javascript:;">Relatórios</a>
                          <ul>
                            <li><a href="/relatorioVendas">Controle de Vendas</a></li>
                            <!-- <li><a href="#">Drop Down Page 2</a></li>
                            <li><a href="#">Drop Down Page 3</a></li> -->
                          </ul>
                        </li>
                        <li class="submenu">
                          <a href="javascript:;">Cadastros</a>
                          <ul>
                            <li><a href="/cadastroAdministradores">Administradores</a></li>
                            <li><a href="/cadastroSellers">Sellers</a></li>
                            <li><a href="/cadastroProdutos">Produtos</a></li>
                          </ul>
                        </li>
                          <li class="scroll-to-section">
                            <a class="scroll-to-section" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                            </form>
                          </li> 
                      </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
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

    <script src="{{ url ('assets/js/jquery-2.1.0.min.js')}}"></script>
    <script src="{{ url ('assets/js/popper.js')}}"></script>
    <script src="{{ url ('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ url ('assets/js/owl-carousel.js')}}"></script>
    <script src="{{ url ('assets/js/accordions.js')}}"></script>
    <script src="{{ url ('assets/js/datepicker.js')}}"></script>
    <script src="{{ url ('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{ url ('assets/js/waypoints.min.js')}}"></script>
    <script src="{{ url ('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ url ('assets/js/imgfix.min.js')}}"></script> 
    <script src="{{ url ('assets/js/slick.js')}}"></script> 
    <script src="{{ url ('assets/js/lightbox.js')}}"></script> 
    <script src="{{ url ('assets/js/isotope.js')}}"></script> 
    <script src="{{ url ('assets/js/custom.js')}}"></script>
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
