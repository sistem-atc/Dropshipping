@extends('menus')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">Cadastros Sellers</div><br/>
				<div class = "row justify-content-center">
					<div class="col-sm-8">
						<div >
						<label for="lbl-name">Nome</label>
						<input id="name" name="name" type="text" class="form-control" placeholder="Nome" required autocomplete="ative"/>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
						<label for="lbl-cpfcnpj">CNPJ / CPF</label>
						<input id="cpfcnpj" name="cpfcnpj" type="text" class="form-control" placeholder="CNPJ / CPF" required autocomplete="ative"/>
						</div>
					</div>
				</div><br/>
				<div class = "row justify-content-center">
					<div class="col-sm-4">
						<div class="form-group">
						<label for="lbl-phone">Telefone</label>
						<input id="phone" name="phone" type="text" class="form-control" placeholder="Telefone" required autocomplete="ative"/>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
						<label for="lbl-email">Email</label>
						<input id="email" name="email" type="text" class="form-control" placeholder="E-mail" required autocomplete="ative"/>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
						<label for="lbl-cep">CEP</label>
						<input id="cep" name="cep" type="text" class="form-control" placeholder="CEP" required autocomplete="ative"/>
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
					    <input id="city" name="city" type="text" class="form-control" placeholder="Estado" required autocomplete="ative"/>
			    	    </div>
			    	</div>
                    <div class="col-sm-3">
				        <div class="form-group">
					    <label for="lbl-uf">Cidade</label>
					    <input id="uf" name="uf" type="text" class="form-control" placeholder="Cidade" required autocomplete="ative"/>
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
							<select  id="ative" name="ative" class="form-control" value="{{ old('ative') }}" required autocomplete="ative">
								<option value="true" selected>Sim</option>
								<option value="false">Não</option>
							</select >
						</div>
					</div>
				</div>
				<div class = "row justify-content-center">
                    <div class="col-sm-4">
				        <div class="form-group">
					    <label for="lbl-name_dp">ID Mercado Livre</label>
					    <input id="name_dp" name= "name_dp" type="text" class="form-control" placeholder="Id Mercado Livre" required autocomplete="ative"/>
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
						<label for="name_dp" name= "name_dp" class="form-control">Mercado Livre</label>
						</div>
					</div>
				</div><br/>
				
				<div class = "row justify-content-center">
					<div class="form-group">
				        <button class="btn  btn-primary" type="submit">Salvar</button>
				        <a class="btn btn-primary">Cancelar</a>
				        <a class="btn  btn-primary  aw-btn-link-danger" onclick="excluir()">Excluir Cadastro?</a>
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
            </div>
        </div>
    </div>

@endsection