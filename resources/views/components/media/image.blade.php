<div x-data="{ image: null }">
    <div x-on:dragover="event.preventDefault()" x-on:drop="image = event.dataTransfer.files[0]">
        <label for="fileInput" class="relative cursor-pointer">
            <input id="fileInput" type="file" x-ref="fileInput" class="sr-only" x-on:change="image = $refs.fileInput.files[0]">
            <div x-show="!image" class="border-2 border-dashed border-gray-400 p-4 text-center rounded hover:bg-gray-100 hover:border-gray-600 hover:cursor-pointer">
                <div class="flex flex-col items-center justify-center h-full">
                    <p class="text-gray-600">Arraste e solte a imagem aqui</p>
                    <p class="text-gray-400">ou</p>
                    <span class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Selecione uma imagem</span>
                </div>
            </div>
        </label>
        
        <div x-show="image" class="flex flex-col items-center space-y-2">
            <img x-bind:src="URL.createObjectURL(image)" alt="Imagem selecionada" class="max-w-xs mx-auto">
            
            <x-button.destructive x-on:click="image = null" text="Remover imagem"></x-button.destructive>
        </div>
    </div>
</div>
