<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
    <a href="{{ config('app.url') }}" class="brand-logo">
        <img class="logo-abbr" src="{{ asset('assets/images/logo bijeli.png') }}" alt="">
        <h4 style="color: white; margin-left: 10px; margin-top: 10px;">GIMNAZIJA VISOKO</h4>
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->
<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                        
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="dropdown-menu dropdown-menu-right">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">Odjava</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->