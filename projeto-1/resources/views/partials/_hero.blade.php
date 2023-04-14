        <!-- Hero -->
        <section
            class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
        >
            <div
                class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
                style="background-image: url('images/laravel-logo.png')"
            ></div>

            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white">
                    Lara<span class="text-black">Gigs</span>
                </h1>
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Find or post Laravel jobs & projects
                </p>
                <div>
                    <a
                        href="register.html"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                        >Sign Up to List a Gig</a
                    >
                </div>
            </div>
        </section>


        {{-- 
            What are Laravel partials?
Laravel Blade Partials

A blade partial is similar to an include or require in PHP. It's an easy way to include contents of another file inside of a template. A PHP include would look something like 'include file. php' whereas a blade @include looks like @include('partials.


            O que são parciais do Laravel?
Laravel Blade Partials

Uma parcial de lâmina é semelhante a uma inclusão ou exigência em PHP. É uma maneira fácil de incluir o conteúdo de outro arquivo dentro de um modelo. Uma inclusão do PHP seria algo como 'incluir arquivo. php' enquanto um blade @include se parece com @include('partials.
            
            É usado um "_" antes do nome do arquivo para saber que é um partial

            É bom para separar as partes do HTML em arquivos diferentes
            
            --}}