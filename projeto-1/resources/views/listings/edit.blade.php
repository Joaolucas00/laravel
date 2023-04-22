@extends('layout')
@section('conteudo')

<div
                   class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Create a Gig
                        </h2>
                        <p class="mb-4">Post a gig to find a developer</p>
                    </header>

                    <form action="/listings" method="POST" enctype="multipart/form-data">
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
                                value="{{old('empresa')}}"
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
                                value="{{old('titulo')}}"
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
                                value="{{old('Local')}}"
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
                                value="{{old('email')}}"
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
                                value="{{old('website')}}"
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
                                value="{{old('tags')}}"
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
                                value="{{old('logo')}}"
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
                            >{{old('descricao')}}</textarea>

                        @error('descricao')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Create Gig
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </div>
@endsection