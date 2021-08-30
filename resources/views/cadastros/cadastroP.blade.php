@extends('menus')
@section('content')

<div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">Cadastros Produtos</div><br/>
				<div class = "row justify-content-center">
					<div class="col-sm-7">
						<div >
						<label for="lbl-name">Nome</label>
						<input id="name" type="text" class="form-control" placeholder="Nome"/>
						</div>
					</div>
					<div class="col-sm-4">
				 	    <div class="form-group">
				    	<label for="lbl-adress_inveontory">Endereço Estoque</label>
					    <input id="adress_inveontory" name="adress_inveontory" type="text" class="form-control" placeholder="Endereço Estoque"/>
			    	    </div>
			    	</div>
				</div>
				<div class = "row justify-content-center">
					<div class="col-sm-3">
						<div class="form-group">
						<label for="lbl-category">Categoria</label>
						<input id="category" name="category" type="text" class="form-control" placeholder="Categoria"/>
						</div>
					</div>                    
					<div class="col-sm-2">
						<div class="form-group">
						<label for="lbl-tax">Impostos</label>
						<input id="tax" name="tax" type="text" class="form-control" placeholder="Dados Fiscais"/>
						</div>
					</div>
					<div class="col-sm-3">
				        <div class="form-group">
					    <label for="lbl-model">Modelo</label>
					    <input id="model" name="model" type="text" class="form-control" placeholder="Modelo"/>
			    	    </div>
			        </div>
                    <div class="col-sm-3">
				        <div class="form-group">
					    <label for="lbl-material">Material</label>
					    <input id="material" name="material" type="text" class="form-control" placeholder="Material"/>
			    	    </div>
			        </div>
				</div> 
				<div class = "row justify-content-center">
					<div class="col-sm-2">
						<div class="form-group">
						<label for="lbl-profit_margin">Margem de Lucro %</label>
						<input id="profit_margin" name="profit_margin" type="text" class="form-control" placeholder="Margem de Lucro"/>
						</div>
					</div>
					<div class="col-sm-9">
				        <div class="form-group">
					    <label for="lbl-description">Descrição</label>
					    <input id="description" name="description" type="text" class="form-control" placeholder="Descrição"/>
			    	    </div>
			    	</div>
				</div></br>
				<div class = "row justify-content-center">
					<div class="col-sm-3">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Comprimento</span>
							</div>
							<input id="length" name="length" type="text" class="form-control" aria-label="Comprimento">
							<div class="input-group-append">
								<span class="input-group-text">cm</span>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Largura</span>
							</div>
							<input id="width" name="width" type="text" class="form-control" aria-label="Largura">
							<div class="input-group-append">
								<span class="input-group-text">cm</span>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Altura</span>
							</div>
							<input id="height" name="height" type="text" class="form-control" aria-label="Altura">
							<div class="input-group-append">
								<span class="input-group-text">cm</span>
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Peso</span>
							</div>
							<input id="weight" name="weight" type="text" class="form-control" aria-label="Peso">
							<div class="input-group-append">
								<span class="input-group-text">kg</span>
							</div>
						</div>
					</div>
				</div></br>
				<div class = "row justify-content-center">
					<div class="col-sm-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Imagens</span>
							</div>
							<form class="btn btn-dark" enctype="multipart/form-data" action="upload.php" method="post">
                            <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
                            <div><input name="imagem" multiple type="file"/></div>
                        </form>
						</div>
					</div>
				</div></br>
			</div>
			<div class = "row justify-content-center">
					<div class="form-group">
				        <button class="btn btn-primary" type="submit">Salvar</button>
				        <a class="btn btn-secondary">Consultar</a>
				        <a class="btn btn-danger aw-btn-link-danger" onclick="excluir()">Excluir Cadastro?</a>
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