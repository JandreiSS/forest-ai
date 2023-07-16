
<x-button 
    {{ $attributes->merge(['class' => 
        'bg-red-500
        text-white 
        hover:bg-red-700
        active:bg-red-800
        focus:ring-2 focus:ring-red-300
        disabled:bg-red-200 dark:disabled:bg-neutral-700
        dark:disabled:text-neutral-500'
    ]) }}

/>