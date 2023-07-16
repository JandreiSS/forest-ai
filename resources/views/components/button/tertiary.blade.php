
<x-button 
    {{ $attributes->merge(['class' => 
        'bg-transparent
        text-blue-600 dark:text-neutral-50
        border border-blue-600 dark:border-neutral-50

        hover:bg-blue-600 hover:text-white 
        dark:hover:bg-neutral-50 dark:hover:text-neutral-800
        
        active:bg-blue-700 active:text-white active:border-blue-600
        dark:active:bg-neutral-200 dark:active:text-neutral-800 dark:active:border-neutral-200
        
        focus:ring-2 focus:ring-blue-200 dark:focus:ring-blue-500

        disabled:bg-transparent disabled:border-neutral-300 disabled:text-neutral-300 
        dark:disabled:bg-neutral-800 dark:disabled:text-neutral-400 dark:disabled:border-neutral-600'
    ]) }}

/>