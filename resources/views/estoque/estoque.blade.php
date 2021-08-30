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
							<input id="nf" type="number" class="form-control @error('nf') is-invalid @enderror" name="nf" value="{{ old('nf') }}" required placeholder="Numero da NF" autofocus/>
								@error('nf')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>	
						<div class="col-sm-1">
							<div >
							<label for="lbl-serie">Série</label>
							<input id="serie" type="number" class="form-control @error('serie') is-invalid @enderror" name="serie" value="{{ old('serie') }}" required placeholder="Série" autofocus/>
								@error('serie')
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
                        <div class="col-sm-2">
							<div class="form-group">
							<label for="lbl-cfop">CFOP</label>
							<input id="cfop" type="number" class="form-control @error('cfop') is-invalid @enderror" name="cfop" value="{{ old('cfop') }}" min="1" step="any" required placeholder="CFOP"/>
								@error('cfop')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
							<label for="lbl-tax">Impostos</label>
							<input id="tax" type="number" class="form-control @error('tax') is-invalid @enderror" name="tax" value="{{ old('tax') }}" min="1" step="any" required placeholder="Impostos"/>
								@error('tax')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
                    </div>
					<div class = "row justify-content-center">
						<div class="col-sm-5">
							<div >
							<label for="lbl-namecompany">Nome do Fornecedor</label>
							<input id="namecompany" type="number" class="form-control @error('namecompany') is-invalid @enderror" name="namecompany" value="{{ old('namecompany') }}" required placeholder="Informe o nome do Fornecedor" autofocus/>
								@error('namecompany')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>	
						<div class="col-sm-4">
							<div >
							<label for="lbl-cpfcnpj">CNPJ / CPF</label>
							<input id="cpfcnpj" type="number" class="form-control @error('cpfcnpj') is-invalid @enderror" name="cpfcnpj" value="{{ old('cpfcnpj') }}" required placeholder="CPF / CNPJ" autofocus/>
								@error('cpfcnpj')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>	
						<div class="col-sm-2">
							<div >
							<label for="lbl-ie">IE</label>
							<input id="ie" type="number" class="form-control @error('ie') is-invalid @enderror" name="ie" min="1" step="any" required placeholder="Inserir Incrição Estadual"/>
								@error('ie')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>	
                    </div><br/>
                    <div class="container row justify-content-center" style="padding-top: 20px;">
						<div class="card-header row justify-content-center">Lista de Produtos</div>
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
										<td scope="row"><input type="text" class="col-sm-10"></input></td>
										<th class="col-sm-4"></th>
										<td><input type="text" class="col-sm-10"></td>
										<td><input type="text" class="col-sm-10"></td>
										<th class="col-sm-3"></th>
										<th><button class="btn btn-primary" type="button" onclick="remove(this)">Remover</button></th>
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
            </div>
        </div></br>
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