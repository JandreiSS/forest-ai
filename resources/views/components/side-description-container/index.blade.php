@props(['title', 'description', 'content_class' => 'sm:col-span-11 md:col-span-10 lg:col-span-8'])

@php
    $classes = 'grid
                grid-cols-1
                sm:grid-cols-12
                gap-4
                lg:gap-4
                2xl:gap-5'
@endphp

<div {{ $attributes->merge(['class' => $classes ]) }}>
    <div class="sm:col-span-12 lg:col-span-3">
        <x-h2.index class="text-neutral-600">
            {{ $title }}
        </x-h2.index>
    
        <x-p.index class="text-neutral-500">
            {!! $description !!}
        </x-p.index>
    </div>
    <div class="{{ $content_class }}">
        {{ $slot }}
    </div>
</div>