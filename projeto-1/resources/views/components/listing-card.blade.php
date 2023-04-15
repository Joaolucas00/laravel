{{--
    
Props são apenas dados que queremos passar para esse componente para que possamos usá-lo dentro do componente. Assim, podemos lê-lo/usá-lo sempre que quisermos dentro desse componente

    Documentação

    You may pass data to Blade components using HTML attributes. Hard-coded, primitive values may be passed to the component using simple HTML attribute strings. PHP expressions and variables should be passed to the component via attributes that use the : character as a prefix:
    
--}}


@props(['lis'])


<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{asset('img/no-image.jpg')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listing/{{$lis->id}}">{{ $lis->titulo }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $lis->empresa}}</div>
            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Laravel</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">API</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Backend</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Vue</a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$lis->Local}}
            </div>
        </div>
    </div>
</x-card>