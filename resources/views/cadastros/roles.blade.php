@extends('menus')
@section('content')
	<div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">Cadastros Administradores</div><br/>
				<form action="{{ route('cadastraRoles') }}" method="POST">
                    @csrf
                    <div class = "row justify-content-center">
                        <div class="col-sm-3">
							<div class="form-group">
							<label for="lbl-name">Nome</label>
							<input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nome"/>
								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
                        @if (Auth::user()->paper === 1)
                        <div class="col-sm-2">
							<div>
                                <label for="lbl-estoque">Cadastra Empresas</label>
                                <select id="register" name="register" class="form-control" value="{{ old('register') }}" required autocomplete="ative">
                                    <option value="true" selected>Sim</option>
                                    <option value="false">Não</option>
                                </select>
							</div>
						</div>
                        @endif
                        <div class="col-sm-2">
							<div>
                                <label for="lbl-roles">Criar Regras</label>
                                <select id="roles" name="roles" class="form-control" value="{{ old('roles') }}" required autocomplete="ative">
                                    <option value="true" selected>Sim</option>
                                    <option value="false">Não</option>
                                </select>
							</div>
						</div>
                        <div class="col-sm-2">
							<div>
                                <label for="lbl-relatov">Relatorio Vendas</label>
                                <select id="relatov" name="relatov" class="form-control" value="{{ old('relatov') }}" required autocomplete="ative">
                                    <option value="true" selected>Sim</option>
                                    <option value="false">Não</option>
                                </select>
							</div>
						</div>
                    </div>  
                    <div class = "row justify-content-center">
                        <div class="col-sm-3">
							<div>
                                <label for="lbl-mensagensML">Mensagens Mercado Livre</label>
                                <select id="mensagensML" name="mensagensML" class="form-control" value="{{ old('mensagensML') }}" required autocomplete="ative">
                                    <option value="true" selected>Sim</option>
                                    <option value="false">Não</option>
                                </select>
							</div>
						</div>
                        <div class="col-sm-2">
							<div>
                                <label for="lbl-mensagensSellers">Mensagens Sellers</label>
                                <select id="mensagensSellers" name="mensagensSellers" class="form-control" value="{{ old('mensagensSellers') }}" required autocomplete="ative">
                                    <option value="true" selected>Sim</option>
                                    <option value="false">Não</option>
                                </select>
							</div>
						</div>
                        <div class="col-sm-2">
							<div>
                                <label for="lbl-estoque">Estoque</label>
                                <select id="estoque" name="estoque" class="form-control" value="{{ old('estoque') }}" required autocomplete="ative">
                                    <option value="true" selected>Sim</option>
                                    <option value="false">Não</option>
                                </select>
							</div>
						</div>
                        <div class="col-sm-2">
							<div>
                                <label for="lbl-pedidos">Pedidos</label>
                                <select id="pedidos" name="pedidos" class="form-control" value="{{ old('pedidos') }}" required autocomplete="ative">
                                    <option value="true" selected>Sim</option>
                                    <option value="false">Não</option>
                                </select>
							</div>
						</div>
                    </div></br>
                    <div class = "row justify-content-center">
                        <div class="col-sm-3">
							<div>
                                <label for="lbl-cadastroA">Cadastro Administradores</label>
                                <select id="cadastroA" name="cadastroA" class="form-control" value="{{ old('cadastroA') }}" required autocomplete="ative">
                                    <option value="true" selected>Sim</option>
                                    <option value="false">Não</option>
                                </select>
							</div>
						</div>
                        <div class="col-sm-2">
							<div>
                                <label for="lbl-cadastroP">Cadastro Produtos</label>
                                <select id="cadastroP" name="cadastroP" class="form-control" value="{{ old('cadastroP') }}" required autocomplete="ative">
                                    <option value="true" selected>Sim</option>
                                    <option value="false">Não</option>
                                </select>
							</div>
						</div>
                        <div class="col-sm-2">
							<div>
                                <label for="lbl-cadastroS">Cadastro Sellers</label>
                                <select id="cadastroS" name="cadastroS" class="form-control" value="{{ old('cadastroS') }}" required autocomplete="ative">
                                    <option value="true" selected>Sim</option>
                                    <option value="false">Não</option>
                                </select>
							</div>
						</div>
                        <div class="col-sm-2">
							<div>
                                <label for="lbl-anuncios">Anuncios</label>
                                <select id="anuncios" name="anuncios" class="form-control" value="{{ old('anuncios') }}" required autocomplete="ative">
                                    <option value="true" selected>Sim</option>
                                    <option value="false">Não</option>
                                </select>
							</div>
						</div>
                    </div></br>
                    <div class = "row justify-content-center">
						<div class="form-group">
							<button class="btn  btn-primary" type="submit">Salvar</button>
							<a class="btn btn-secondary">Consultar</a>
							<a class="btn btn-danger aw-btn-link-danger" onclick="">Excluir Cadastro?</a>
						</div>
					</div>
                </form>
                </div>
            </div>
        </div>
    </div>              
                    
@endsection                    