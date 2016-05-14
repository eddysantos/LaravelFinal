@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Proyectos</div>

                <div class="panel-body">
                    <ul>
                      <?php foreach ($proyects as $key): ?>
                        <li><a href="{{ url( '/proyectos/' . $key->id ) }}">{{$key->nombre}}</a></li>
                      <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
