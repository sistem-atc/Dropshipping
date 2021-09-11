@extends('menus')
@section('content')
<<<<<<< HEAD
<link rel="stylesheet" type="text/css" href="{{ url ('assets/css/chat.css')}}">
<div class="row justify-content-center">
    <form action="" method="POST" class="col-md-11 row justify-content-center">        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header row justify-content-center">Mensagens Internas</div><br/>
                    @csrf    
                        <div class="content-wrapper">
                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                                    <div class="users-container">
                                        <div class="chat-search-box">
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Search">
                                                    <div class="input-group-btn">
                                                    <button type="button" class="btn btn-info">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="users">
                                            @foreach ($users as $user)
                                            <li class="person" data-chat="person{{$user->id}}">
                                                <div class="user">
                                                    <img src="" alt="">
                                                    <span class="status busy"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">{{ $user->name }}</span>
                                                    <span class="time">15/02/2019</span>
                                                </p>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                                    <div class="selected-user">
                                        <span>To: <span class="name">Emily Russell</span></span>
                                    </div>
                                    <div class="chat-container">
                                        <ul class="chat-box chatContainerScroll">
                                            <li class="chat-left">
                                                <div class="chat-avatar">
                                                    <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                                    <div class="chat-name">Russell</div>
                                                </div>
                                                <div class="chat-text">Hello, I'm Russell.
                                                    <br>How can I help you today?</div>
                                                <div class="chat-hour">08:55<span class="fa fa-check-circle"></span></div>
                                            </li>
                                            <li class="chat-right">
                                                <div class="chat-hour">08:56<span class="fa fa-check-circle"></span></div>
                                                <div class="chat-text">Hi, Russell
                                                    <br> I need more information about Developer Plan.</div>
                                                <div class="chat-avatar">
                                                    <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                                    <div class="chat-name">Sam</div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-group mt-3 mb-0">
                                            <div class="input-group-append">    
                                                <textarea class="form-control" rows="1" placeholder="Type your message here..."></textarea>
                                                <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </form>               
</div>

=======
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
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
@endsection