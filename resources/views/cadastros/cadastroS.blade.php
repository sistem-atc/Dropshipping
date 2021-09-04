@extends('menus')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">Cadastros Sellers</div><br/>
					<form action="{{ route('cadastraSeller') }}" method="POST">
						@csrf
						<div class = "row justify-content-center">
							<div class="col-sm-8">
								<div >
									<label for="lbl-name">Nome</label>
									<input id="name" name="name" type="text" class="form-control" placeholder="Nome" required autocomplete="ative"/>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="lbl-cpf_cnpj">CNPJ / CPF</label>
									<input id="cpf_cnpj" name="cpf_cnpj" type="text" class="form-control cpf_cnpj" placeholder="CNPJ / CPF" required autocomplete="ative"/>
								</div>
							</div>
						</div>
						<div class = "row justify-content-center">
							<div class="col-sm-4">
								<div class="form-group">
									<label for="lbl-phone">Telefone</label>
									<input id="phone" name="phone" type="text" class="form-control phone" placeholder="Telefone" required autocomplete="ative"/>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="lbl-email">Email</label>
									<input id="email" name="email" type="email" class="form-control" placeholder="E-mail" required autocomplete="ative"/>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="lbl-cep">CEP</label>
									<input id="cep" name="cep" type="text" class="form-control cep" placeholder="CEP" required autocomplete="ative"/>
								</div>
							</div> 
						</div> 
						<div class = "row justify-content-center">
							<div class="col-sm-8">
								<div class="form-group">
									<label for="lbl-address">Endereço</label>
									<input id="address" name="address" type="text" class="form-control" placeholder="Endereço" required autocomplete="ative"/>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="lbl-number">Número</label>
									<input id="number" name="number" type="text" class="form-control" placeholder="Número" required autocomplete="ative"/>
								</div>
							</div> 
						</div>
						<div class = "row justify-content-center">
							<div class="col-sm-2">
								<div class="form-group">
									<label for="lbl-city">Estado</label>
									<input id="uf" name="uf" type="text" class="form-control uf" placeholder="Estado" required autocomplete="ative"/>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="lbl-uf">Cidade</label>
									<input id="city" type="text" class="form-control" name="city" required autocomplete="ative" placeholder="Cidade"/>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="lbl-password">Senha</label>
									<input id="password" name="password" type="password" class="form-control" placeholder="Digite uma Senha" required autocomplete="ative"/>
								</div>
							</div>
							<div class="col-sm-2">
								<div>
									<label for="lbl-ative">Ativo</label>
									<select id="ative" name="ative" class="form-control" required autocomplete="ative">
										<option value="true" selected>Sim</option>
										<option value="false">Não</option>
									</select >
								</div>
							</div>
						</div>
						<div class = "row justify-content-center">
							<div class="col-sm-4">
								<div class="form-group">
									<label for="lbl-appid">ID Mercado Livre</label>
									<input id="appid" name= "appid" type="text" class="form-control" placeholder="Id Mercado Livre" required autocomplete="ative"/>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label for="lbl-secretkey">Secret Key</label>
									<input id="secretkey" name="secretkey" type="password" class="form-control" placeholder="Secret Key" required autocomplete="ative"/>
								</div>
							</div>
							<div class="col-sm-2">
								<div>
									<label for="lbl-name_dp">Tipo</label>
									<select id="name_dp" name="name_dp" class="form-control" required autocomplete="ative">
										<option value="Mercado Livre" selected>Mercado Livre</option>
									</select >
								</div>
							</div>
						</div><br/>
						<div class = "row justify-content-center">
							<div class="form-group">
								<button class="btn btn-primary" type="submit">Salvar</button>
								<a class="btn btn-secondary">Consultar</a>
								<a class="btn btn-danger aw-btn-link-danger" onclick="excluir()">Excluir Cadastro?</a>
							</div>
						</div>
					</form>	
				</div>	
            </div>
        </div>
    </div>

<script>$(document).ready(function(){$('.cep').mask('00000-000')});</script>
<script>$(document).ready(function(){$('.uf').mask('AA')});</script>
<script>
	var SPMaskBehavior = function (val) {
	return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000-0000' : '(00) 0000-00009';
	},
	spOptions = {
	onKeyPress: function(val, e, field, options) {
	field.mask(SPMaskBehavior.apply({}, arguments), options);
	}
	};
	$('.phone').mask(SPMaskBehavior, spOptions);
	jQuery(document).ready(function ($) {
    var CpfCnpjMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
    },
        cpfCnpjpOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);
            }
        };
    $('.cpf_cnpj').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);
});
</script>
@endsection