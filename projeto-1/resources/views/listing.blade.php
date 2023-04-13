@extends('layout')
@section('conteudo')

@if ($listing['id'] != 0)

<h1> {{ $listing['titulo'] }} </h1>
<p> {{ $listing['descricao'] }}</p>
<p>Tags: {{ $listing['tags'] }}</p>
@else
<p>Not found</p>
@endif

@endsection