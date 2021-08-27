<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title >Cadastrar Empresa</title>
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header row justify-content-center">Cadastrar Empresa</div>
                        <div class="card-body">
                            <form action="{{ route('cadastroEmpresas') }}" method="POST">
                                @csrf
                                <div class = "row justify-content-center">
                                    <div class="col-md-6">
                                        <div>
                                        <label for="lbl_name">Nome</label>
                                        <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                        <label for="lbl_cnpj">Informe o CNPJ</label>
                                        <input id="cnpj" type="cnpj" class="form-control" name="cnpj" required autocomplete="cnpj">
                                        </div>
                                    </div>
                                </div><br/>
                                <div class = "row justify-content-center">
                                    <div class="col-md-4">
                                        <div>
                                        <label for="lbl_phone">Informe o telefone</label>
                                        <input id="phone" type="phone" class="form-control" name="phone" required autocomplete="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                        <label for="lbl_cep">Informe o CEP</label>
                                        <input id="cep" type="cep" class="form-control" name="cep" required autocomplete="cep">
                                        </div>
                                    </div>
                                </div><br/>
                                <div class = "row justify-content-center">
                                    <div class="col-md-10">
                                        <div>
                                        <label for="lbl_address">Informe o Endereço</label>
                                        <input id="address" type="address" class="form-control" name="address" required autocomplete="address">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div>
                                        <label for="lbl_number">Número</label>
                                        <input id="number" type="number" class="form-control" name="number" required autocomplete="number">
                                        </div>
                                    </div>
                                </div><br/>
                                <div class = "row justify-content-center">
                                    <div class="col-md-6">
                                        <div>
                                        <label for="lbl_city">Informe o Estado</label>
                                        <input id="city" type="city" class="form-control" name="city" required autocomplete="city">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                        <label for="lbl_uf">Informe a UF</label>
                                        <input id="uf" type="uf" class="form-control" name="uf" required autocomplete="uf">
                                        </div>
                                    </div>
                                </div><br/>
                                <div class = "row justify-content-center">
                                    <div class="col-md-6">    
                                        <div>
                                        <label for="lbl_appid">ID Dropshipping</label>
                                        <input id="appid" type="appid" class="form-control" name="appid" required autocomplete="appid">
                                        </div>
                                    </div>                        
                                    <div class="col-md-6">
                                        <div>
                                        <label for="lbl_secretkey">Secret Key</label>
                                        <input id="secretkey" type="secretkey" class="form-control" name="secretkey" required autocomplete="secretkey">
                                        </div>
                                    </div>
                                </div><br/>
                                <div class = "row justify-content-center">    
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">Registro</button>
                                        </div>
                                    </div>
                                </div>    
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
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
    </body>
</html>
