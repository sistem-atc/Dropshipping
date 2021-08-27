@extends('menus')
@section('content')

<div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">Cadastros Produtos</div><br/>
				<div class = "row justify-content-center">
					<div class="col-sm-7">
						<div >
						<label for="input-nome">Nome</label>
						<input id="input-nome" type="text" class="form-control" placeholder="Nome"/>
						</div>
					</div>
					<div class="col-sm-4">
				 	    <div class="form-group">
				    	<label for="input-estado">Endereço Estoque</label>
					    <input id="input-estado" type="text" class="form-control" placeholder="Endereço Estoque"/>
			    	    </div>
			    	</div>
				</div><br/>
				<div class = "row justify-content-center">
					<div class="col-sm-3">
						<div class="form-group">
						<label for="input-cep">Categoria</label>
						<input id="input-cep" type="text" class="form-control" placeholder="Categoria"/>
						</div>
					</div>                    
					<div class="col-sm-2">
						<div class="form-group">
						<label for="input-endereco">Impostos</label>
						<input id="input-endereco" type="text" class="form-control" placeholder="Dados Fiscais"/>
						</div>
					</div>
					<div class="col-sm-3">
				        <div class="form-group">
					    <label for="input-idmercadolivre">Modelo</label>
					    <input id="input-idmercadolivre" type="text" class="form-control" placeholder="Modelo"/>
			    	    </div>
			        </div>
                    <div class="col-sm-3">
				        <div class="form-group">
					    <label for="input-secrectkey">Material</label>
					    <input id="input-secrectkey" type="text" class="form-control" placeholder="Material"/>
			    	    </div>
			        </div>
				</div> 
				<div class = "row justify-content-center">
					<div class="col-sm-2">
						<div class="form-group">
						<label for="input-telefone">Valor de Venda</label>
						<input id="input-telefone" type="text" class="form-control" placeholder="Valor de Venda"/>
						</div>
					</div>
					<div>
				<div class = "row justify-content-center">
					<div class="col-sm-11">
				        <div class="form-group">
					    <label for="input-senha">Descrição</label>
					    <input id="input-senha" type="password" class="form-control" placeholder="Descrição"/>
			    	    </div>
			    	</div>
				</div>
				<div class = "row justify-content-center">
					<div class="col-sm-1">
						<div class="form-group">
							<label for="input-email">Comprimento</label>
							<input id="input-email" type="text" class="form-control" placeholder="Comprimento"/>
							<label for="input-tipo" class="form-control">cm</label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="form-group">
							<label for="input-email">Largura</label>
							<input id="input-email" type="text" class="form-control" placeholder="Largura"/>
							<label for="input-tipo" class="form-control">cm</label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="form-group">
							<label for="input-email">Altura</label>
							<input id="input-email" type="text" class="form-control" placeholder="Altura"/>
							<label for="input-tipo" class="form-control">cm</label>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="form-group">
							<label for="input-email">Peso</label>
							<input id="input-email" type="text" class="form-control" placeholder="Peso"/>
							<label for="input-tipo" class="form-control">kg</label>
						</div>
					</div>
				</div>
			</div>
			<div class = "row justify-content-center">
                    <div class="col-sm-4">
                        <label for="input-estado">Imagens</label>
                        <form class="btn  btn-primary" enctype="multipart/form-data" action="upload.php" method="post">
                            <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
                            <div><input name="imagem" multiple type="file"/></div>
                        </form> 
			    	</div>
			</div></br>
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