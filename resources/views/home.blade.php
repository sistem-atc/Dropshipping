@extends('menus')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">{{ __('Dashboard') }}</div><br/>
                <div class="row justify-content-center">{{Auth::user()->name}}</div>   
                <div class="row justify-content-center">{{Auth::user()->paper}}</div>   
                        @foreach ($roles as $role) 
                            @if(Auth::check() and Auth::user()->paper == $role->id)         
                              @if($role->anuncios)
                                <div class="row justify-content-center">Anuncios é Verdadeiro</div>   
                              @else
                                <div class="row justify-content-center">Anuncios é Falso</div>   
                              @endif
                            @endif 
                        @endforeach
                <h2 class="mb-4">Sidebar</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>

@endsection