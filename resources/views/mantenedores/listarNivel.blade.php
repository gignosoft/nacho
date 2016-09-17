@extends('mantenedores.layouts.principal')


@section('titulo')
    {{ 'Mantenedor de Niveles' }}
@endsection


@section('contenido')

    <div class="container">
        <h1>Mantenedor de Niveles</h1>
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group  col-xs-12 pegado-izquierda">
                <label for="level_id">Nivel</label>
                <select class="form-control" name="level_id" id="level_id"  >
                    <option selected disabled>Seleccione un nivel</option>
                    @foreach($niveles as $nivel)
                            <option value="{{ $nivel->id }}">{{ $nivel->name }}</option>
                    @endforeach

                </select>
            </div>

            <div class="container">
                <p class="row" >
                    <button type="submit" class="btn btn-primary">Buscar</button>
                    <button type="button" class="btn btn-primary">Nuevo</button>
                    <button type="button" class="btn btn-primary">Salir</button>
                </p>
            </div>

        </form>

        <div class="row" >

            <div class="col-xs-12" >
                <table class="table ">
                    <thead>
                    <tr class="row">
                        <th class="col-xs-1">Nivel</th>
                        <th class="col-xs-2">Acción</th>
                    </tr>
                    </thead>

                    <tbody>

                    @if($numNiveles == 0)
                        <tr>
                            <td>{{'No existen niveles con el criterio de búsqueda'}}</td>
                        </tr>
                    @endif

                    @if($numNiveles > 0)
                        @foreach($niveles as $nivel)
                            <tr class="row">
                                <td class="col-xs-9">{{ $nivel->name }}</td>

                                <td class=" col-xs-2">
                                    <a class="iconos" href=""   data-toggle="tooltip" title="Editar" >  <img src="{{ url('img/ic_edit_black_18dp_1x.png') }}"/></a> |
                                    <a class="iconos" href=""   data-toggle="tooltip" title="Ver más" > <img src="{{ url('img/ic_visibility_black_18dp_1x.png') }}"/></a> |
                                    <a class="iconos" href=""   data-toggle="tooltip" title="Eliminar"> <img src="{{ url('img/ic_close_black_18dp_1x.png') }}"/></a>

                                </td>

                            </tr>
                        @endforeach
                    @endif
                    </tbody>


                </table>

            </div>

        </div>



    </div>


@endsection
