
@props([
    'name' => 'arrow-right',
    'size',
    'type'
])

@php
    $style = [
        'with_text' => [
            'default' => 'w-5 h-5',
            'small' => 'w-4 h-4'
        ],
        'without_text' => [
            'default' => 'w-5 h-5',
            'small' => 'w-5 h-5'
        ]
    ];

    $classes = $style[$type][$size];

    $icon_component_name = 'icons.' . $name;
@endphp

<x-dynamic-component 
    {{ $attributes->merge(['class' => $classes]) }}
    :component="$icon_component_name" />