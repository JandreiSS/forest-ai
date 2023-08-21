<div>
    <form action="{{ route('upload-image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col">
            <input type="file" name="image">
            @if($errors->has('image'))
                <div>
                    {{ $errors->first('image') }}
                </div>
            @endif

            <button type="submit">Classificar</button>
        </div>
    </form>
</div>
