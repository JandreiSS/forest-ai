
@props([
    'size' => 'default',
    'text' => null,
    'icon' => null,
    'icon_class' => null,
    'href' => null,
])

@php
    $style = [
        'with_text' => [
            'default' => 'py-3 px-4 gap-3',
            'small' => 'py-2.5 px-3 gap-2'
        ],
        'without_text' => [
            'default' => 'p-3',
            'small' => 'p-2'
        ]
    ];
    
    $type = $text ? 'with_text' : 'without_text';

    $classes = $style[$type][$size];

    $classes .= ' flex rounded-md items-center focus:outline-none transition-colors duration-300 justify-center'
@endphp

@if($href)
    <a {{ $attributes->merge(['class' => $classes]) }} href="{{ $href }}" >
                
        @if($text)
            <span class="{{ $size === 'small' ? 'text-sm' : '' }}">{{ $text }}</span>
        @endif

        @if($icon)
            <x-button.icon 
                :type="$type"
                :size="$size"
                class="{{ $icon_class }}" 
                :name="$icon"/>
        @endif
    </a>    
@else
    <button {{ $attributes->merge(['class' => $classes]) }} >
            
        @if($text)
            <span class="{{ $size === 'small' ? 'text-sm' : '' }}">{{ $text }}</span>
        @endif

        @if($icon)
            <x-button.icon 
                :type="$type"
                :size="$size"
                class="{{ $icon_class }}" 
                :name="$icon"/>
        @endif
    </button>
@endif

