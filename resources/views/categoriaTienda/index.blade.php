@extends('adminlte::page')
@section('content')

<div>
    @foreach ( $categoriaTiendas as $CategoriaTienda )
    <tr>
        <td>
            <h1>
                {{$CategoriaTienda->descripcion}}
            </h1>
        </td>
    </tr>

    @endforeach
</div>
@stop
