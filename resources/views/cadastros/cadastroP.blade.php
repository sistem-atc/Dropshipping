@extends('menus')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="card">
            <div class="card-header row justify-content-center">Cadastros Produtos</div><br/>
				<form action="{{ route('cadastroProd') }}" enctype="multipart/form-data" method="POST">
					@csrf
					<div class = "row justify-content-center">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="lbl-name">Nome do Produto</label>
								<input id="name" name="name" type="text" class="form-control" required autocomplete="ative" placeholder="Nome do Produto"/>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<label for="lbl-adress_inventory">Endereço Estoque</label>
								<input id="adress_inventory" name="adress_inventory" type="text" class="form-control" required autocomplete="ative" placeholder="Endereço Estoque"/>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label for="lbl-category">Categoria</label>
								<input id="category" name="category" type="text" class="form-control" required autocomplete="ative" placeholder="Categoria"/>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<label for="lbl-model">Modelo</label>
								<input id="model" name="model" type="text" class="form-control" required autocomplete="ative" placeholder="Modelo"/>
							</div>
						</div>   
					</div>
					<div class = "row justify-content-center">
						<div class="col-sm-2">
							<div class="form-group">
								<label for="lbl-profit_margin">Margem de Lucro %</label>
								<input id="profit_margin" name="profit_margin" type="text" class="form-control profit_margin" required autocomplete="ative" placeholder="Margem de Lucro"/>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<label for="lbl-material">Material</label>
								<input id="material" name="material" type="text" class="form-control" required autocomplete="ative" placeholder="Material"/>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="form-group">
								<label for="lbl-description">Descrição</label>
								<input id="description" name="description" type="text" class="form-control" required autocomplete="ative" placeholder="Descrição"/>
							</div>
						</div>
					</div></br>
					<div class = "row justify-content-center">
						<div class="col-sm-3">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Comprimento</span>
								</div>
								<input id="length" name="length" type="text" class="form-control" required autocomplete="ative" aria-label="Comprimento">
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
								<input id="width" name="width" type="text" class="form-control" required autocomplete="ative" aria-label="Largura">
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
								<input id="height" name="height" type="text" class="form-control" required autocomplete="ative" aria-label="Altura">
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
								<input id="weight" name="weight" type="text" class="form-control" required autocomplete="ative" aria-label="Peso">
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
								<button class="btn btn-secondary" enctype="multipart/form-data" action="upload.php">
									<div><input required name="images[]" multiple type="file"/></div>
								</button>
							</div>
						</div>
					</div></br>
					<div class = "row justify-content-center">
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Salvar</button>
							<a class="btn btn-secondary">Consultar</a>
<<<<<<< HEAD
							<a class="btn btn-danger aw-btn-link-danger" onclick="">Excluir Cadastro?</a>
						</div>
=======
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
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>$('.profit_margin').mask('Z#9V##',{translation:{'Z':{pattern: /[\-\+]/,optional:true},'V':{pattern: /[\,]/},'#':{pattern: /[0-9]/,optional: true}}});</script>
<script>$(".profit_margin").on('blur',function(){if($(this).val().length > 0)$(this).val( $(this).val() + '%' );}).on('focus',function(){$(this).val($(this).val().replace('%',''));});</script>
@endsection