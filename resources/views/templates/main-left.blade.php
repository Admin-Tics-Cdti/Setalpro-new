<div id="cpanel" class="panel text-center">
    Menu <i class="fa-solid fa-align-justify"></i>
</div>
<ul id="menu">
@foreach ($menu as $module => $controllers)
    @foreach ($controllers as $controller => $funciones)
        <li class="menu-items">
            <a class="item" style="text-aling:center;" title="{{ucfirst($controller)}}"><i class="fa-solid fa-angle-right text-center"></i>&nbsp;<span class="item-title">{{ucfirst($controller)}}</span></a>
            <ul class="sub-menu">
            @foreach ($funciones as $function => $val)
                <li class="sub-item"><a href="{{url($module.'/'.$controller.'/'.$val)}}">{{ucfirst($function)}}</a></li>
            @endforeach
            </ul>
        </li>
    @endforeach
@endforeach
<br><br>
</ul><br><br>
