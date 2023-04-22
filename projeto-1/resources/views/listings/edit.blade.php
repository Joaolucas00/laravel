@extends('layout')
@section('conteudo')

<div
                   class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Edit Gig
                        </h2>
                        <p class="mb-4">Edit: {{$listing->titulo}}</p>
                    </header>

                    <form action="/listings/{{$listing->id}}" method="POST" enctype="multipart/form-data">
                        @csrf {{-- Previnir ataque cross-site script. 
                            
                            Vídeo sobre: https://www.youtube.com/watch?v=2LYPyUk-L0k 
                            --}}
                            {{--
                                enctype

                                The enctype attribute specifies how the form-data should be encoded when submitting it to the server.

                                Note: The enctype attribute can be used only if method="post".

                                valores

                                application/x-www-form-urlencoded	
                                
                                Default. All characters are encoded before sent (spaces are converted to "+" symbols, and special characters are converted to ASCII HEX values)
                                
                                multipart/form-data	 
                                
                                This value is necessary if the user will upload a file through the form


                                text/plain	
                                
                                Sends data without any encoding at all. Not recommended
                                
                                --}}
                                @method('PUT')
                                {{-- 
                                    Dentro do form só podenos colocar os métodos GET e POST
                                    O laravel tem a diretiva method para que podemos colocar outros métodos HTTP
                                    --}}
                        <div class="mb-6">
                            <label
                                for="company"
                                class="inline-block text-lg mb-2"
                                >Company Name</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="empresa"
                                value="{{$listing->empresa}}"
                            />

                            @error('empresa')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror

                        </div>

                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2"
                                >Job Title</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="titulo"
                                placeholder="Example: Senior Laravel Developer"
                                value="{{$listing->titulo}}"
                            />
                        @error('titulo')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                            
                        </div>

                        <div class="mb-6">
                            <label
                                for="location"
                                class="inline-block text-lg mb-2"
                                >Job Location</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="Local"
                                placeholder="Example: Remote, Boston MA, etc"
                                value="{{$listing->Local}}"
                            />

                            @error('Local')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2"
                                >Contact Email</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email"
                                value="{{$listing->email}}"
                            />

                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="website"
                                class="inline-block text-lg mb-2"
                            >
                                Website/Application URL
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="website"
                                value="{{$listing->website}}"
                            />

                        @error('website')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Tags (Comma Separated)
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="tags"
                                placeholder="Example: Laravel, Backend, Postgres, etc"
                                value="{{$listing->tags}}"
                            />
                        @error('tags')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                                Company Logo
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="logo"
                            />
                            <img
                            class="w-48 mr-6 mb-6"
                            src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('img/no-image.jpg')}}"
                            alt=""
                        />
                        @error('logo')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
                                Job Description
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="descricao"
                                rows="10"
                                placeholder="Include tasks, requirements, salary, etc"
                            >{{$listing->descricao}}</textarea>

                        @error('descricao')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Edit Gig
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </div>
@endsection