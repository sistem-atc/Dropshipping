@extends('menus')
@section('content')
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

@endsection