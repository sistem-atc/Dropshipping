@extends('menus')
@section('content')
<div class="row justify-content-center">
    <form action="" method="POST" class="col-md-11 row justify-content-center">        
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">Mensagens Mercado Livre</div><br/>
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if (is_int($qtd_perguntas) && $qtd_perguntas > 0 && !empty($perguntas))
                        @foreach ($perguntas as $pergunta)
                        <?php
                            $product_url = "";
                            $url = '/items/' . $pergunta->item_id;
                            $anuncio = "";
                            $anuncio = $meli->get($url, array('access_token' => $_SESSION['access_token']));
                            $product_url = $anuncio['body']->permalink;
                        ?>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                            <div class="card" style="margin-top: 10px;">
                                <h5 class="card-header">ID Pergunta: <?php echo $pergunta->id ?></h5>
                                <div class="card-body">
                                    <h5 class="card-title">Produto:
                                        <a href="<?php echo $product_url ?>" target="_blank"><?php echo $pergunta->item_id ?></a>
                                    </h5>
                                    <p class="card-text"><?php echo $pergunta->text ?></p>
                                    <p class="card-text"><textarea id="question-<?php echo $pergunta->id ?>"
                                                                style="width: 100%"></textarea></p>
                                    <button class="btn btn-primary" onclick="sendAnswer(<?php echo $pergunta->id ?>)">
                                        Responder
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <div class="card" style="text-align: center;">
                            <div class="card-body">
                                <h5 class="card-title">Nenhuma pergunta para listar!</h5>
                                <div style="padding: 10px;"></div>
                            </div>
                        </div>
                    </div>
                    @endif
				</div>
			</div>
		</div>			
    </form>               
</div>
@endsection