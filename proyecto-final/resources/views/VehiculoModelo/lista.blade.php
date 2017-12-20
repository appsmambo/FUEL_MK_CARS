@extends('layouts.app')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Marca de vehículo</h1>
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
                        <th>Logo</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($data as $registro)
                    <tr>
                        <td>
                            <a class="mvEditar" title="Editar" href="#" data-id="{{$registro->id}}" data-descripcion="{{$registro->descripcion}}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                        </td>
                        <td>{{$registro->descripcion}}</td>
                        <td>
                            @if ($registro->logo != '')
                            <img src="uploads/marca-vehiculo/{{$registro->logo}}" alt="Logo {{$registro->descripcion}}" class="img-responsive center-block" style="max-width:132px">
                            @endif
                        </td>
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
            <h4 id="tituloMv">Crear marca de vehículo</h4>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('vmar_agregar') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="0" id="mv_id">
                <div class="form-group">
                    <input type="text" class="form-control" name="descripcion" id="mv_descripcion" placeholder="*Descripción" maxlength="100" required autofocus>
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" name="logo" id="logo" accept="image/*">
                </div>
                <input type="submit" value="Guardar" class="btn btn-primary pull-right" style="margin-left:12px">
                <input type="button" value="Cancelar" class="btn btn-default pull-right" id="mvCancelar" style="display:none">
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(function(){
        $('.mvEditar').click(function() {
            var boton = $(this);
            var msg = 'Editar marca de vehículo <small>'+boton.data('descripcion')+'</small>';
            $('#mv_id').val(boton.data('id'));
            $('#mv_descripcion').val(boton.data('descripcion')).focus();
            $('#tituloMv').html(msg);
            $('#mvCancelar').toggle('slow');
            return false;
        });
        $('#tvCancelar').click(function() {
        	var msg = 'Crear marca de vehículo';
            $('#mv_id').val(0);
            $('#mv_descripcion').val('').focus();
            $('#tituloMv').html(msg);
            $(this).toggle('slow');
        });
    });
</script>
@endsection