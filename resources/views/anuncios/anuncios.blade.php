@extends('menus')
@section('content')
<div class="row justify-content-center">
<<<<<<< HEAD
    <form action="{{ route('envio.anuncios') }}" method="POST" class="col-md-11 row justify-content-center">        
=======
    <form action="" method="POST" class="col-md-11 row justify-content-center">        
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
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
<<<<<<< HEAD
								<th scope="col">Selecionar</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($estoques as $estoque)
								<?php
									$ttvalue = number_format($estoque->unitary_value * $estoque->qtd, 2, '.', ',');
								?>
								<tr>
									<th scope="col" class="col-sm-2">{{ $estoque->cod_produto }}</th>
									<input type="hidden" id="id_product" name="id_product.{{ $estoque->cod_produto }}" value="{{ $estoque->cod_produto }}">
									<th scope="col" class="col-sm-3">{{ $estoque->cod_produto()->first()->name }}</th>
									<input type="hidden" id="name_product" name="name_product.{{ $estoque->cod_produto }}" value="{{ $estoque->cod_produto()->first()->name }}">
									<th scope="col" class="col-sm-2">{{ $estoque->unitary_value }}</th>
									<input type="hidden" id="unitary_value" name="unitary_value.{{ $estoque->cod_produto }}" value="{{ $estoque->unitary_value }}">
									<th scope="col" class="col-sm-2">{{ $estoque->qtd }}</th>
									<input type="hidden" id="qtd" name="qtd.{{ $estoque->cod_produto }}" value="{{ $estoque->qtd }}">
									<th scope="col" class="col-sm-3">{{ $ttvalue }}</th>
									<input type="hidden" id="total_value.{{ $estoque->cod_produto }}" name="total_value" value="{{ $ttvalue }}">
									<th scope="col" class="col-sm-2"><input type="checkbox" id="checkbox" name="checkbox.{{ $estoque->cod_produto }}"></th>
								</tr>
							@endforeach
						</tbody>
=======
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
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
					</table>
	            </div>
	        </div>
		</div>	
        <div class="col-md-11">
            <div class = "row justify-content-center">
			    <div class="form-group">
<<<<<<< HEAD
					<button class="btn btn-success" type="submit">Enviar</button>
				</div>
=======
					<button class="btn  btn-primary" type="submit">Salvar</button>
				    <a class="btn btn-primary">Consultar</a>
					<a class="btn btn-primary aw-btn-link-danger" onclick="">Excluir Cadastro?</a>
				</div>
				<script>
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
			</div>
        </div>        
    </form>               
</div>
@endsection