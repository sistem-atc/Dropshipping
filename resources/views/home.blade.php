@extends('menus')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header row justify-content-center">{{ __('Dashboard') }}</div><br/>
                <div class="row justify-content-center">{{Auth::user()->name}}</div>  
            </div>
        </div>
    </div>

@endsection