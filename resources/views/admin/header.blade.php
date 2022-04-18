<header id="header" class="header">
    
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="https://cf.shopee.co.id/file/1b1f2baddc8bb4c47e4c71cc0b3d861d" style="width: 30px" alt="Logos"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    
    <div class="top-right">
        
        <div class="header-menu">
            <div class="header-left">
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                    </form>
                </div>

                

                <div class="dropdown for-notification">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="count bg-danger">{{$Admin->count('user_id')}}</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="notification">
                        <p class="red">You have 3 Notification</p>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-check"></i>
                            <p>Server #1 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-info"></i>
                            <p>Server #2 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-warning"></i>
                            <p>Server #3 overloaded.</p>
                        </a>
                    </div>
                </div>

                <div class="dropdown for-message">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="count bg-primary">{{$Admin->count('user_id')}}</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red">You have {{$Admin->count('user_id')}} Mails</p>
                       

                        <a class="dropdown-item media" href="">
                            {{-- <span class="photo media-left"><img alt="avatar" src="{{$Admins->user->gambar}}"></span> --}}
                            <div class="message media-body">
                                @foreach ($Admin as $no => $Admins) 
                                <span class="name float-left">{{$Admins->user->name}}</span>
                                <span class="time float-right">{{$Admins->subject}}</span>
                                <p>{{$Admins->description}}</p>
                                @endforeach 

                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{Auth::user()->foto_user}}" alt="pp">
                </a>

                <div class="user-menu dropdown-menu">
                   
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li><a class="nav-link" href="#">My Profile</a></li>
                        <li>
                            <a class="nav-link" href="#">Notifications <span class="count">13</span></a>
                        </li>
                        @if(Auth::check())
                        @if(Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
                        </li>
                        @endif
                   
                        @if(Auth::user()->role == 'agent')
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('agent')}}">Halaman agent</a>
                        </li>
                        @endif
                           
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('user')}}">Halaman user</a>
                        </li>
                
                        @endif

                        <li>
                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                               
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</header>