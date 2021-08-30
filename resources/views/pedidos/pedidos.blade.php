@extends('menus')
@section('content')
<div class="row justify-content-center">
    <form action="" method="POST" class="col-md-11 row justify-content-center">        
		<div class="col-md-11">
            <div class="card">
				<div class="card-header row justify-content-center">Entrada dos Pedidos</div></br>
                	@csrf	
					<table class="table" id="products-table">
						<thead>
							<tr>
								<th scope="col" class="col-sm-2">Cod. Produto</th>
								<th scope="col" class="col-sm-3">Descrição do Produto</th>
								<th scope="col" class="col-sm-2">Valor Un.</th>
								<th scope="col" class="col-sm-2">Quant.</th>
								<th scope="col" class="col-sm-3">Valor Total</th>
								<th scope="col">Opções</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th><button class="btn btn-primary" type="button" onclick="remove(this)">Detalhes</button></th>
							</tr>
						</tbody>
					</table>
				</div>
            </div>
        </div>
        <div class="col-md-11">
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
        </div>        
    </form>               
</div>
@endsection