@extends('layouts.app')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">Filtro:</label>
                    <select name="" class="form-control" id="exampleInputEmail3">
                        <option>-Seleccione-</option>
                        <option>Motos</option>
                        <option>Camionetas</option>
                        <option>Camiones</option>
                        <option>Minivan</option>
                        <option>Buses</option>
                    </select>
                </div>
            </form>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe allowfullscreen class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7802.267941427566!2d-77.0316324285278!3d-12.102979769335066!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sus!4v1516140598582"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
