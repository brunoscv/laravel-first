<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element text-center">
                    <img alt="image" class="rounded-circle" width="80" height="80"
                         src="{{ Auth::user()->image ? asset('images/'.Auth::user()->image) : 'https://via.placeholder.com/80' }}">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{ Auth::user()->name }}</span>
                        <span class="text-muted text-xs block">{{ Auth::user()->email }} <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="{{ route('administrators.profile') }}">Perfil</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('panel.logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    <a href="{{ route('dashboard') }}">VP</a>
                </div>
            </li>

            <li class="{{ isActiveRoute('dashboard') }} item-menu">
                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span
                        class="nav-label">Dashboard</span></a>
            </li>
            @if(Auth::user()->can('viewAny', \App\Models\User::class))
                <li class="{{ isActiveRoute(['dashboard.*', 'administrators.*', 'types.*']) }}">
                    <a href="{{ route('dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Administração</span>
                        <span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse" aria-expanded="true">
                        <li><a href="{{ route('administrators.index') }}"><i class="fa fa-users"></i>
                                Administradores</a></li>

                        <li><a href="{{ route('types.index') }}"><i class="fa fa-ticket"></i> Tipos de Usuário</a></li>
                    </ul>
                </li>
            @endif

        </ul>
    </div>
</nav>
