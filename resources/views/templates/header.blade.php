<div class="row">
<div class="header-text col-xs-7 col-sm-8">
    <img src="{{ url('img/iconos/Sena-white.png') }}" alt="Sena">
    <span id="header-title">SETALPRO <small class="hidden-xs">/ Seguimiento etapa lectiva y productiva</small><span>
</div>
<div class="header-menu col-xs-5 col-sm-4">
    <li class="open">
        <a href="#" id="navbarDropdown" data-bs-toggle="dropdown">
        <div class="avatar">
        <img src="https://setalpro.cdtiapps.com/img/avatar/male-0.png" class="img-circle" alt="avatar">
        </div>
        <div class="user-mini">
            <span class="welcome">Bienvenido,<br></span>
            <span>{{Auth::User()->participante->par_nombres." ".Auth::User()->participante->par_apellidos}}</span>
        </div>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a href="#">Ver perfil</a></li>
            <li><a href="#">Editar perfil</a></li>
            <li>
                <a id="logout" style="color:white;">Cerrar sessi&oacute;n</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
            </li>
        </ul>
    </li>
</div>
</div>