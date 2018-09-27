<div class="menu menu-dark">
    <nav class="navbar navbar-dark navbar-expand-lg w-100 nav-pills nav-fill">
        <a class="navbar-brand logo sliding-middle-out item-menu" href="{{ url('/') }}" style="font-size: 25pt;text-transform: initial;">
            <span class="circle laraColor">#</span> Laravel
        </a>
        
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        @auth
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" >
                    <li class="nav-item nav-link active">
                        <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item nav-link ">
                        <a class="nav-link" href="#">Link1</a>
                    </li>
                    <li class="nav-item nav-link  dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">
                                Action
                            </a>
                            <a class="dropdown-item" href="#">
                                Another action
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                Something else here
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-link ">
                        <a class="nav-link" href="#">Link2</a>
                    </li>
                    <li class="nav-item nav-link ">
                        <a class="nav-link" href="#">Link3</a>
                    </li>
                    <li class="nav-item nav-link ">
                        <a class="nav-link disabled" href="#">
                            Disabled
                        </a>
                    </li>
                </ul>
                <div class="btn-group" role="group">
                    <button id="user-id-button" type="button" class="btn btn-secondary dropdown-toggle especial-button-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{Gravatar::get(Auth::user()->email)}}" class="m--img-rounded m--marginless user-pic" alt=""/>
                        <span class="user-details menu-item">
                            {{ Auth::user()->name }}
                        </span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="user-id-button">
                        <a class="dropdown-item" href="#">Configurações</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Sair') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        @else
            <ul class="navbar-nav mr-auto justify-content-end">
                <li class="nav-item nav-link active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item nav-link">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item nav-link">
                    <a class="nav-link" href="{{ route('register') }}">Registro</a>
                </li>
            </ul>
        @endauth
    </nav>
</div>