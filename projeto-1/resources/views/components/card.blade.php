{{--So, in order to merge the additional values to the attributes, you'd use merge() method on $attributes like so.--}}

<div {{$attributes->merge(['class' => "bg-gray-50 border border-gray-200 rounded"])}}>
    {{$slot}} {{-- Aqui vai o conteúdo--}}
</div>