@extends('menus')
@section('content')
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
<<<<<<< HEAD
                                        <input id="cnpj" type="text" class="form-control cpf_cnpj" name="cnpj" required autocomplete="cnpj">
=======
                                        <input id="cnpj" type="cnpj" class="form-control" name="cnpj" required autocomplete="cnpj">
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
                                        </div>
                                    </div>
                                </div><br/>
                                <div class = "row justify-content-center">
                                    <div class="col-md-4">
                                        <div>
                                        <label for="lbl_phone">Informe o telefone</label>
<<<<<<< HEAD
                                        <input id="phone" type="text" class="form-control phone" name="phone" required autocomplete="phone">
=======
                                        <input id="phone" type="phone" class="form-control" name="phone" required autocomplete="phone">
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                        <label for="lbl_cep">Informe o CEP</label>
<<<<<<< HEAD
                                        <input id="cep" type="text" class="form-control cep" name="cep" required autocomplete="cep">
=======
                                        <input id="cep" type="cep" class="form-control" name="cep" required autocomplete="cep">
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
                                        </div>
                                    </div>
                                </div><br/>
                                <div class = "row justify-content-center">
                                    <div class="col-md-10">
                                        <div>
                                        <label for="lbl_address">Informe o Endereço</label>
<<<<<<< HEAD
                                        <input id="address" type="text" class="form-control" name="address" required autocomplete="address">
=======
                                        <input id="address" type="address" class="form-control" name="address" required autocomplete="address">
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
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
<<<<<<< HEAD
                                        <input id="city" type="text" class="form-control" name="city" required autocomplete="city">
=======
                                        <input id="city" type="city" class="form-control" name="city" required autocomplete="city">
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                        <label for="lbl_uf">Informe a UF</label>
<<<<<<< HEAD
                                        <input id="uf" type="text" class="form-control uf" name="uf" required autocomplete="uf">
=======
                                        <input id="uf" type="uf" class="form-control" name="uf" required autocomplete="uf">
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
                                        </div>
                                    </div>
                                </div><br/>
                                <div class = "row justify-content-center">
                                    <div class="col-md-6">    
                                        <div>
                                        <label for="lbl_appid">ID Dropshipping</label>
<<<<<<< HEAD
                                        <input id="appid" type="text" class="form-control" name="appid" required autocomplete="appid">
=======
                                        <input id="appid" type="appid" class="form-control" name="appid" required autocomplete="appid">
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
                                        </div>
                                    </div>                        
                                    <div class="col-md-6">
                                        <div>
                                        <label for="lbl_secretkey">Secret Key</label>
<<<<<<< HEAD
                                        <input id="secretkey" type="password" class="form-control" name="secretkey" required autocomplete="secretkey">
=======
                                        <input id="secretkey" type="secretkey" class="form-control" name="secretkey" required autocomplete="secretkey">
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
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
<<<<<<< HEAD
        </div>

<script>$(document).ready(function(){$('.cep').mask('00000-000')});</script>
<script>$(document).ready(function(){$('.uf').mask('AA')});</script>
<script>var SPMaskBehavior = function (val) {return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000-0000' : '(00) 0000-00009';},spOptions = {onKeyPress: function(val, e, field, options) {field.mask(SPMaskBehavior.apply({}, arguments), options);}};</script>    
<script>$('.phone').mask(SPMaskBehavior, spOptions);jQuery(document).ready(function ($) {var CpfCnpjMaskBehavior = function (val) {return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';},cpfCnpjpOptions = {onKeyPress: function (val, e, field, options) {field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);}};$('.cpf_cnpj').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);});</script>
        
=======
        </div>    
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
@endsection
