@extends('menus')
@section('content')
<div class="row justify-content-center">
    <form action="" method="POST" class="col-md-11 row justify-content-center">        
        <div class="col-md-11">
            <div class="card">
				<div class="card-header row justify-content-center">Publicar Anuncios Mercado Livre</div></br>
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
						<tfoot>
							<tr>
								<th colspan="5" sytle="text-align: left;">
									<button onclick="AddTableRow()" class="btn btn-primary" type="button">Adicionar Produto</button>
								</th>
							</tr>
						</tfoot>
					</table>
	            </div>
	        </div>
		</div>	
        <div class="col-md-11">
            <div class = "row justify-content-center">
			    <div class="form-group">
					<button class="btn  btn-primary" type="submit">Salvar</button>
				    <a class="btn btn-primary">Consultar</a>
					<a class="btn btn-primary aw-btn-link-danger" onclick="">Excluir Cadastro?</a>
				</div>
				<script>
			</div>
        </div>        
    </form>               
</div>
@endsection