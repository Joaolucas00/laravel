@extends('layout')
@section('conteudo')

<h1> {{ $listing['titulo'] }} </h1>
<p> {{ $listing['descricao'] }}</p>
<p>Tags: {{ $listing['tags'] }}</p>


@endsection