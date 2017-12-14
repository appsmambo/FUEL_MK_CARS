@extends('layouts.app')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tipo de vehículo</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($data as $registro)
                    <tr>
                        <td>
                            <a class="tvEditar" title="Editar" href="#" data-id="{{$registro->id}}" data-descripcion="{{$registro->descripcion}}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                        </td>
                        <td>{{$registro->descripcion}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2"><p class="">No se encontraron registros</p></td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h4 id="tituloTv">Crear tipo de vehículo</h4>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('tv_agregar') }}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="0" id="tv_id">
                <div class="form-group">
                    <input type="text" class="form-control" name="descripcion" id="tv_descripcion" placeholder="*Descripción" maxlength="100" required autofocus>
                </div>
                <input type="submit" value="Guardar" class="btn btn-primary pull-right" style="margin-left:12px">
                <input type="button" value="Cancelar" class="btn btn-default pull-right" id="tvCancelar" style="display:none">
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(function(){
        $('.tvEditar').click(function() {
            var boton = $(this);
            var msg = 'Editar tipo de vehículo <small>'+boton.data('descripcion')+'</small>';
            $('#tv_id').val(boton.data('id'));
            $('#tv_descripcion').val(boton.data('descripcion')).focus();
            $('#tituloTv').html(msg);
            $('#tvCancelar').toggle('slow');
            return false;
        });
        $('#tvCancelar').click(function() {
        	var msg = 'Crear tipo de vehículo';
            $('#tv_id').val(0);
            $('#tv_descripcion').val('').focus();
            $('#tituloTv').html(msg);
            $(this).toggle('slow');
        });
    });
</script>
@endsection