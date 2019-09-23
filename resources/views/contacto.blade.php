@extends('layouts/mi-layout')

@section('contenido')
    <div>
        <h1>CONTACTO</h1>

        <ul>
            @for($i = 0; $i < 5; $i++)
                <li>Elemento {{ $i * $i }} </li>
            @endfor
        </ul>

    </div>
@endsection
