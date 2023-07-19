<div x-data="{ image: null, results: null }">
    <form action="{{ route('upload-image') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div x-on:dragover="event.preventDefault()" x-on:drop="image = event.dataTransfer.files[0]">
            <label for="fileInput" class="relative cursor-pointer">
                <input name="image" id="fileInput" type="file" x-ref="fileInput" class="sr-only" x-on:change="image = $refs.fileInput.files[0]">
                <div x-show="!image" class="border-2 border-dashed border-neutral-400 p-4 text-center rounded hover:bg-neutral-100 hover:border-neutral-600 hover:cursor-pointer">
                    <div class="flex flex-col items-center justify-center h-full space-y-2">
                        <p class="text-neutral-400">Arraste e solte a imagem aqui</p>
                        <p class="text-neutral-400">ou</p>
                        <span class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Selecione uma imagem</span>
                    </div>
                </div>
            </label>
            
            <div x-show="image" class="flex flex-col items-center space-y-2">
                <img x-bind:src="URL.createObjectURL(image)" alt="Imagem selecionada" class="max-w-xs mx-auto">
                
                <div class="flex gap-2">
                    <button type="button" x-on:click="image = null" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Remover imagem</button>
                    <button id="submit-button" type="button" x-on:click="classifyImage()" :disabled="!image" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Classificar</button>
                </div>
            </div>
        </div>
    </form>

    <div x-show="results">
        <h2>Resultados da classificação:</h2>
        <ul>
            <template x-for="result in results">
                <li>
                    <strong>Classe:</strong> <span x-text="result.label"></span>
                    <br>
                    <strong>Probabilidade:</strong> <span x-text="result.confidence"></span>
                </li>
            </template>
        </ul>
    </div>
</div>

<script>
    document.getElementById('submit-button').addEventListener('click', function() {
        document.getElementById('submit-button').setAttribute('disabled', 'disabled');
        document.getElementById('submit-button').textContent = 'Classificando...';
    });
</script>
