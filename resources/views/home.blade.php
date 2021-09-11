@extends('menus')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">{{ __('Dashboard') }}</div><br/>
                <div class="row justify-content-center">{{Auth::user()->name}}</div>  
<<<<<<< HEAD
=======
                  @foreach ($roles as $role) 
                    @if(Auth::check() and Auth::user()->paper == $role->id)         
                      @if($role->anuncios)
                        <div class="row justify-content-center">Anuncios é Verdadeiro</div>   
                      @else
                        <div class="row justify-content-center">Anuncios é Falso</div>   
                      @endif
                    @endif 
                  @endforeach
                </div>
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
            </div>
        </div>
    </div>

@endsection