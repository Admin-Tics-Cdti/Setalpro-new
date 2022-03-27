@extends('templates.devoops')

@section('content')
    <div class="row">
        <div class="col-md-6">
        <img src="{{url('img/iconos/Robot.gif')}}" alt="">
        </div>
        <div class="col-md-6" style="padding:10px;">
            <h2>Bienvenido(a) {{ Auth::user()->participante->par_nombres." ".Auth::user()->participante->par_apellidos }}</h2><br>
            <p>Que la paz , el amor, la prosperidad y la salud reinen en tu casa</p>
            <p>Te deseamos exitos en estas festividades navide&ntilde;as.</p><br>
            <center>
                <img src="{{url('img/iconos/Sena-orange.png')}}" alt="" style="width: 200px;height: 200px;">
            </center>
        </div>
    </div>
@endsection