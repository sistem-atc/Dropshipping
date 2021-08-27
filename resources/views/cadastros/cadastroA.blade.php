@extends('menus')
@section('content')
	<!-- Retorno da Gravação dos dados no DB com erro. -->
	<div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">Cadastros Administradores</div><br/>
				<form action="{{ route('cadastraAdmin') }}" method="POST">
					@csrf	
					<div class = "row justify-content-center">
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
							<select  id="company" name="company" class="form-control" name="company" value="{{ old('company') }}" required autocomplete="company" placeholder="Selecione a Empresa">
								@foreach ($empresas as $empresa)
									<option value='{{ $empresa->id }}' selected>{{ $empresa->name}}</option>
								@endforeach
							</select >
							</div>
						</div>
						<div class="col-sm-2">
							<div>
							<label for="lbl-paper">Tipo</label>
							<select  id="paper" name="paper" class="form-control" name="paper" value="{{ old('paper') }}" required autocomplete="paper" placeholder="Tipo">
								<option value="1" selected>Administrador</option>
								<option value="2">Financeiro</option>
								<option value="3">Ajudante</option>
							</select >
							</div>
						</div>
					</div><br/>
					<div class = "row justify-content-center">
						<div class="col-sm-4">
							<div class="form-group">
							<label for="lbl-phone">Telefone</label>
							<input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Telefone"/>
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
							<div class="form-group">
							<label for="lbl-cpf">CPF</label>
							<input id="cpf" type="cpf" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" placeholder="CPF"/>
								@error('cpf')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div> 
					<div class = "row justify-content-center">
						<div class="col-sm-2">
							<div class="form-group">
							<label for="lbl-cep">CEP</label>
							<input id="cep" type="cep" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="cep" placeholder="CEP"/>
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
							<input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Endereço"/>
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
					<div class = "row justify-content-center">
						<div class="col-sm-2">
							<div class="form-group">
							<label for="lbl-uf">Estado</label>
							<input id="uf" type="uf" class="form-control @error('uf') is-invalid @enderror" name="uf" value="{{ old('uf') }}" required autocomplete="uf" placeholder="Estado"/>
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
							<input id="city" type="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" placeholder="Cidade"/>
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
							<select  id="ative" name="ative" class="form-control" value="{{ old('ative') }}" required autocomplete="ative">
								<option value="true" selected>Sim</option>
								<option value="false">Não</option>
							</select >
							</div>
						</div>
					</div><br/>
					<div class = "row justify-content-center">
						<div class="form-group">
							<button class="btn  btn-primary" type="submit">Salvar</button>
							<a class="btn btn-primary">Consultar</a>
							<a class="btn btn-primary aw-btn-link-danger" onclick="excluir()">Excluir Cadastro?</a>
						</div>
						<script>
							function excluir() {
								swal({
										title: "Tem certeza?",
										text: "Você não poderá recuperar o cadastro após a exclusão.",
										type: "warning",
										showCancelButton: true,
										confirmButtonColor: "#DD6B55",
										confirmButtonText: "Sim, exclua agora!",
										closeOnConfirm: false,
										showLoaderOnConfirm: true
									}, function() {
										setTimeout(function() {
											swal("Excluído!", "O cadastro foi excluído com sucesso.", "success");
										}, 2000);
								});
							}
						</script>
					</div>
				</form>
            </div>
        </div>
    </div>

@endsection