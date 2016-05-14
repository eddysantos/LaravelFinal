@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Tareas del Proyecto {{$proyect->nombre}}</div>

                <div class="panel-body">
                    <ul>
                      <?php foreach ($tasks as $key): ?>
                        <li>{{$key->nombre}}</li>
                      <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
