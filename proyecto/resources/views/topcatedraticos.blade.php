
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
                <th>Posts</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($catedraticos))
            @foreach($catedraticos as $catedratico)
            <tr>
                <td> {{ $catedratico->codigo }} </td>
                <td> {{ $catedratico->nombre }} </td>
                <td> {{ $catedratico->total }} </td>
            @endforeach
            @endif
        </tbody>
    </table>
{{--  </div>  --}}

{{ $catedraticos->links() }}

@endsection

