@extends('layout')
@section('title', 'Dashboard')
@section('header')
@section('contenido')


{{--  <div class="table-responsive">  --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>                
            </tr>
        </thead>
        <tbody>
            @if(isset($catedraticos))
            @foreach($catedraticos as $catedratico)
            <tr>
                <td> {{ $catedratico->codigo }} </td>
                <td> {{ $catedratico->Nombre }} </td>
            @endforeach
            @endif
        </tbody>
    </table>
{{--  </div>  --}}
@endsection