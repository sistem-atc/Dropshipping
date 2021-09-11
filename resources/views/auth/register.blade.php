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
                                        <input id="cnpj" type="text" class="form-control cpf_cnpj" name="cnpj" required autocomplete="cnpj">
                                        </div>
                                    </div>
                                </div><br/>
                                <div class = "row justify-content-center">
                                    <div class="col-md-4">
                                        <div>
                                        <label for="lbl_phone">Informe o telefone</label>
                                        <input id="phone" type="text" class="form-control phone" name="phone" required autocomplete="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                        <label for="lbl_cep">Informe o CEP</label>
                                        <input id="cep" type="text" class="form-control cep" name="cep" required autocomplete="cep">
                                        </div>
                                    </div>
                                </div><br/>
                                <div class = "row justify-content-center">
                                    <div class="col-md-10">
                                        <div>
                                        <label for="lbl_address">Informe o Endereço</label>
                                        <input id="address" type="text" class="form-control" name="address" required autocomplete="address">
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
                                        <input id="city" type="text" class="form-control" name="city" required autocomplete="city">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                        <label for="lbl_uf">Informe a UF</label>
                                        <input id="uf" type="text" class="form-control uf" name="uf" required autocomplete="uf">
                                        </div>
                                    </div>
                                </div><br/>
                                <div class = "row justify-content-center">
                                    <div class="col-md-6">    
                                        <div>
                                        <label for="lbl_appid">ID Dropshipping</label>
                                        <input id="appid" type="text" class="form-control" name="appid" required autocomplete="appid">
                                        </div>
                                    </div>                        
                                    <div class="col-md-6">
                                        <div>
                                        <label for="lbl_secretkey">Secret Key</label>
                                        <input id="secretkey" type="password" class="form-control" name="secretkey" required autocomplete="secretkey">
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

<script>$(document).ready(function(){$('.cep').mask('00000-000')});</script>
<script>$(document).ready(function(){$('.uf').mask('AA')});</script>
<script>var SPMaskBehavior = function (val) {return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000-0000' : '(00) 0000-00009';},spOptions = {onKeyPress: function(val, e, field, options) {field.mask(SPMaskBehavior.apply({}, arguments), options);}};</script>    
<script>$('.phone').mask(SPMaskBehavior, spOptions);jQuery(document).ready(function ($) {var CpfCnpjMaskBehavior = function (val) {return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';},cpfCnpjpOptions = {onKeyPress: function (val, e, field, options) {field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);}};$('.cpf_cnpj').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);});</script>
        
@endsection
