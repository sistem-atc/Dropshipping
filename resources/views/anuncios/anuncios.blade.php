@extends('menus')
@section('content')
<div class="row justify-content-center">
    <form action="" method="POST" class="col-md-11 row justify-content-center">        
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">Entrada de Notas de Compras</div><br/>
					@csrf	
					<div class = "row justify-content-center">
						<div class="col-sm-3">
							<div >
							<label for="lbl-nf">Numero da NF</label>
							<input id="nf" type="number" class="form-control @error('nf') is-invalid @enderror" name="nf" value="{{ old('nf') }}" required placeholder="Informe o numero da NF" autofocus/>
								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>	
						<div class="col-sm-3">
							<div >
							<label for="lbl-total_value">Valor Total</label>
							<input id="total_value" type="number" class="form-control @error('total_value') is-invalid @enderror" name="total_value" min="1" step="any" required placeholder="Inserir Valor Total"/>
								@error('total_value')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>	
                        <div class="col-sm-3">
							<div class="form-group">
							<label for="lbl-tax">Impostos</label>
							<input id="tax" type="number" class="form-control @error('tax') is-invalid @enderror" name="tax" value="{{ old('tax') }}" min="1" step="any" required placeholder="Informe os Impostos"/>
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