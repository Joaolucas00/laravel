@extends('layout')
@section('conteudo')
@include('partials._search')

<a href="index.html" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{asset('img/no-image.jpg')}}"
            alt=""
        />

        <h3 class="text-2xl mb-2">{{$listing->titulo}}</h3>
        <div class="text-xl font-bold mb-4">{{$listing->empresa}}</div>
        <ul class="flex">
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Laravel</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">API</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Backend</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Vue</a>
            </li>
        </ul>
        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> {{$listing->Local}}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl font-bold mb-4">
                Job Description
            </h3>
            <div class="text-lg space-y-6">
                <p>
                    {{$listing->descricao}}
                </p>


                <a
                    href="mailto:{{$listing->email}}"
                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-envelope"></i>
                    Contact Employer</a
                >

                {{--
                    O protocolo mailto é utilizado no HTML junto da propriedade href da tag <a>, para definir um link de e-mail. Esse link não abre uma URL, mas sim o aplicativo de e-mail padrão do dispositivo. Quando o link é aberto, o campo para do e-mail é automaticamente preenchido com o valor definido no mailto.
                    --}}

                <a
                    href="https://test.com"
                    target="_blank"
                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-globe"></i> Visit
                    Website</a
                >
            </div>
        </div>
    </div>
</div>
</div>

@endsection