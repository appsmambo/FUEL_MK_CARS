@extends('layouts.app')
@include('layouts.header')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Inicio</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-6">
        	<table class="table table-hover">
                <thead>
                    <tr>
                        <th>Opciones</th>
                        <th>Tipo combustible</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $registro)
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->descripcion}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
@endsection