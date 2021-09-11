@extends('menus')
@section('content')
	<div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">Cadastro Usuários</div><br/>
				<form action="{{ route('cadastraAdmin') }}" enctype="multipart/form-data" method="POST">
					@csrf	
					<div class="row justify-content-center">
						<div class="col-sm-6">
							<div >
							<label for="lbl-name">Nome</label>
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nome" autofocus/>
								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>	
						<div class="col-sm-3">
							<div>
							<label for="lbl-company">Empresa</label>
							<select id="company" name="company" class="form-control" required autocomplete="company" placeholder="Selecione a Empresa">
								@foreach ($empresas as $empresa)
									@if (Auth::user()->paper == 1)
										<option value='{{ $empresa->id }}' selected>{{ $empresa->name}}</option>
									@else
										@if ($empresa->id > 1)	
											<option value='{{ $empresa->id }}' selected>{{ $empresa->name}}</option>
										@endif
									@endif	
								@endforeach
							</select >
							</div>
						</div>
						<div class="col-sm-2">
							<div>
							<label for="lbl-paper">Tipo</label>
							<select id="paper" name="paper" class="form-control" required autocomplete="paper" placeholder="Tipo">
								@foreach ($roles as $role)
									@if (Auth::user()->paper == 1)
										@if ($role->id !=2)	
											<option value="{{ $role->id}}" selected>{{ $role->name}}</option>
										@endif	
									@else
										@if ($role->id >= 2)
											<option value="{{ $role->id}}" selected>{{ $role->name}}</option>
										@endif
									@endif
								@endforeach		
							</select >
							</div>
						</div>
					</div><br/>
					<div class="row justify-content-center">
						<div class="col-sm-4">
							<div class="form-group">
							<label for="lbl-phone">Telefone</label>
							<input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror phone" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Telefone"/>
								@error('phone')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
							<label for="lbl-email">Email</label>
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail"/>
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group" id="app">
								<label for="lbl-cpf">CPF</label>
								<input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror cpf" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" placeholder="CPF"/>
									@error('cpf')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
							</div>
						</div>
					</div> 
					<div class="row justify-content-center">
						<div class="col-sm-2">
							<div class="form-group">
							<label for="lbl-cep">CEP</label>
							<input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror cep" name="cep" value="{{ old('cep') }}" required autocomplete="cep" placeholder="CEP"/>
								@error('cep')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>                    
						<div class="col-sm-7">
							<div class="form-group">
							<label for="lbl-address">Endereço</label>
							<input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Endereço"/>
								@error('address')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror						
							</div>
						</div>
						<div class="col-md-2">
                            <div>
                                <label for="lbl_number">Número</label>
                                <input id="number" type="number" class="form-control" name="number" required autocomplete="number">
                            </div>
                        </div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-2">
							<div class="form-group">
							<label for="lbl-uf">Estado</label>
							<input id="uf" type="text" class="form-control @error('uf') is-invalid @enderror uf" name="uf" value="{{ old('uf') }}" required autocomplete="uf" placeholder="Estado"/>
								@error('uf')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
							<label for="lbl-city">Cidade</label>
							<input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" placeholder="Cidade"/>
								@error('city')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
							<label for="lbl-password">Senha</label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Digite uma Senha"/>
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
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
					</div><br/>
					<div class = "row justify-content-center">
						<div class="col-sm-6">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Imagens</span>
								</div>
								<button class="btn btn-secondary" enctype="multipart/form-data" action="upload.php">
									<div><input required name="images[]" type="file"/></div>
								</button>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Salvar</button>
							<a class="btn btn-secondary" onclick="">Consultar</a>
							<a class="btn btn-danger aw-btn-link-danger" onclick="">Excluir Cadastro?</a>
						</div>
					</div></br>
				</form>
            </div>
        </div>
    </div>
	
<script>$(document).ready(function(){$('.cep').mask('00000-000')});</script>
<script>$(document).ready(function(){$('.cpf').mask('000.000.000-00')});</script>
<script>$(document).ready(function(){$('.uf').mask('AA')});</script>
<script>var SPMaskBehavior = function (val) {return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000-0000' : '(00) 0000-00009';},spOptions = {onKeyPress: function(val, e, field, options) {field.mask(SPMaskBehavior.apply({}, arguments), options);}};$('.phone').mask(SPMaskBehavior, spOptions);</script>

@endsection