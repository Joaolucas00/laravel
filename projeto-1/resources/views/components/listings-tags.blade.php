@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv); // Retorna uma matriz de strings, cada uma como substring de string formada pela divisão dela a partir do delimiter.
    // Cria um elemento de array cada vez que encontrar, nesse caso, uma vírgula na string $tagsCsv

    // Exemplo:

    // var_dump($tagsCsv); output --> string(12) "laravel, php"

    // var_dump($tags); exemplo de output --> array(2) { [0]=> string(7) "laravel" [1]=> string(4) " php" }
@endphp


<ul class="flex">
    @foreach ($tags as $tag)
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>
