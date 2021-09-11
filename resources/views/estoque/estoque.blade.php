@extends('menus')
@section('content')

<div class="row justify-content-center">
    <form action="{{ route('estoqueCad') }}" method="POST" class="col-md-11 row justify-content-center">        
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
							<input id="serie" type="number" class="form-control" name="serie" placeholder="Série" autofocus/>
							</div>
						</div>	
						<div class="col-sm-3">
							<div >
								<label for="lbl-total_value">Valor Total</label>
								<input id="total_value" type="text" class="form-control total_value" name="total_value" placeholder="Valor Total da NF" required/>
							</div>
						</div>	
                        <div class="col-sm-2">
							<div class="form-group">
								<label for="lbl-cfop">CFOP</label>
								<input id="cfop" type="number" class="form-control" name="cfop" min="1" step="any" required placeholder="CFOP"/>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<label for="lbl-tax">Impostos</label>
								<input id="tax" type="text" class="form-control tax" name="tax" min="1" step="0.01" required placeholder="Impostos"/>
							</div>
						</div>
                    </div>
					<div class = "row justify-content-center">
						<div class="col-sm-5">
							<div >
								<label for="lbl-namecompany">Nome do Fornecedor</label>
								<input id="namecompany" type="text" class="form-control @error('namecompany') is-invalid @enderror" name="namecompany" value="{{ old('namecompany') }}" required placeholder="Informe o nome do Fornecedor" autofocus/>
								@error('namecompany')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>	
						<div class="col-sm-4">
							<div >
								<label for="lbl-cpf_cnpj">CNPJ / CPF</label>
								<input id="cpf_cnpj" name="cpf_cnpj" type="text" class="form-control cpf_cnpj" placeholder="CNPJ / CPF" required autocomplete="ative"/>
							</div>
						</div>	
						<div class="col-sm-2">
							<div >
								<label for="lbl-ie">Insc. Estadual</label>
								<input id="ie" type="number" class="form-control" name="ie" min="1" step="any" placeholder="Inserir IE"/>
							</div>
						</div>	
                    </div><br/>
                    <div class="container row justify-content-center" style="padding-top: 20px;">
						<div class="col-md-12 card-header row justify-content-center">Lista de Produtos</div>
							<table class="table" id="products-table" name="products-table">
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
										<th scope="row"><input type="text" id= "cod_produto" name="cod_produto" class="form-control col-sm-10"></input></th>
										<th class="col-sm-4" id="name_produto" type="text" name="name_produto" class="form-control"></th>
										<th><input type="text" id="unitary_value" name="unitary_value" class="form-control total_value" required></th>
										<th><input type="number" id="qtd" name="qtd" type="number" class="form-control col-sm-10" required></th>
										<th class="col-sm-3" id="subtotal" name= "subtotal"class="form-control" OnClick="calcular(form)" value=total.value></th>
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
					<a class="btn btn-primary aw-btn-link-danger" onclick="">Excluir Cadastro?</a>
				</div>
			</div>
        </div>        
    </form>               
</div>

<script>$('.tax').mask('Z#9V##',{translation:{'Z':{pattern: /[\-\+]/,optional:true},'V':{pattern: /[\,]/},'#':{pattern: /[0-9]/,optional: true}}});</script>
<script>$('.tax').on('blur',function(){if($(this).val().length > 0)$(this).val( $(this).val() + '%' );}).on('focus',function(){$(this).val($(this).val().replace('%',''));});</script>
<script>$('.total_value').mask("#.##0.00", {reverse: true});</script>
<script>$('.unitary_value').mask("#.##0.00", {reverse: true});</script>
<script>jQuery(document).ready(function ($) {var CpfCnpjMaskBehavior = function (val) {return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';},cpfCnpjpOptions = {onKeyPress: function (val, e, field, options) {field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);}};$('.cpf_cnpj').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);});</script>
<script>(function ($) {remove = function (item) {var tr = $(item).closest('tr');tr.fadeOut(400, function () {tr.remove();});return false;}})(jQuery);</script>

<script>(function calcular(form) {
	    var num1 = Number(document.getElementById("unitary_value").value);
	    var num2 = Number(document.getElementById("qtd").value);
	    total.value = parseFloat(num1 + num2).toFixed(2);
})</script>

@endsection