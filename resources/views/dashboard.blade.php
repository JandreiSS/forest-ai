<x-layout.index>
    <div class="lg:grid grid-cols-12">
        <div class="col-start-3 col-span-8">
            <x-h1 class="mb-4">Forest AI</x-h1>
            
            <x-side-description-container.index class="bg-green-700 rounded p-3 shadow-md">
                <x-slot name="title">
                    Classificador
                </x-slot>
                <x-slot name="description">
                    Insira sua imagem do corte transversal da madeira para realizar sua classificação
                </x-slot>
                
                <x-h3 class="text-neutral-600">
                    <x-media.image />
                </x-h3>
            </x-side-description-container.index>
        </div>
    </div>
</x-layout.index>