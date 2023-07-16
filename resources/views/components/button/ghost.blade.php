
<x-button.index 
    {{ $attributes->merge(['class' => 
        'bg-transparent 
        text-blue-600 dark:text-blue-300
        border border-transparent
        hover:bg-blue-100 dark:hover:bg-neutral-700
        active:bg-blue-200 dark:active:bg-neutral-600

        focus:ring-2
        focus:ring-blue-200
        dark:focus:ring-blue-500

        disabled:bg-transparent disabled:text-neutral-300 
        dark:disabled:bg-transparent dark:disabled:text-neutral-400'
    ]) }}

/>