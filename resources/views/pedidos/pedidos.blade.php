@extends('menus')
@section('content')
<div class="row justify-content-center">
    <form action="" method="POST" class="col-md-11 row justify-content-center">        
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">Entrada dos Pedidos</div><br/>
					@csrf	
					<div class = "row justify-content-center">
						<div class="col-sm-3">
							<div >
							<label for="lbl-id_anuncio">Id do Pedido</label>
							<input id="id_anuncio" type="text" class="form-control @error('id_anuncio') is-invalid @enderror" name="nf" placeholder="Id do Pedido"/>
								@error('id_anuncio')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>	
						<div class="col-sm-3">
							<div >
							<label for="lbl-cod_rastreio">Codigo de Rastreio</label>
							<input id="cod_rastreio" type="text" class="form-control @error('cod_rastreio') is-invalid @enderror" name="cod_rastreio" placeholder="Codigo de Rastreio"/>
								@error('cod_rastreio')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>	
                        <div class="col-sm-3">
							<div class="form-group">
							<label for="lbl-id_buyer">Id do Comprador</label>
							<input id="id_buyer" type="text" class="form-control @error('id_buyer') is-invalid @enderror" name="id_buyer" value="{{ old('tax') }}" min="1" step="any" required placeholder="Informe os Impostos"/>
								@error('tax')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
                    </div><br/>
                    <!-- Incluir uma Tabela para inserir varios produtos -->
                    <!-- Comparar o total inserido pela quantidade X o valor e validar no valor total informado -->
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