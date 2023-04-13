@extends('layout')

@section('conteudo')
    
<h1> {{ $heading }} </h1>
{{--
@if (count($listings) == 0)
    <p>No listings found </p>
@endif
--}} 
@unless(count($listings) == 0)
    

@foreach ($listings as $lis)
    <h2> 
       <a href="/listing/{{$lis['id']}}"> {{ $lis['titulo'] }} </a> 
    </h2>
    <p> 
        {{ $lis['descricao'] }} 
    </p>

@endforeach
@else
    <p>No listings found</p>
@endunless


@endsection
