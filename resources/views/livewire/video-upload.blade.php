{{-- <div>
    <form wire:submit="save">
        <input type="file" wire:model="video"/>

        @error('video')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit" class="bg-blue-500 p-2">Save video</button>
    </form>
</div> --}}
<form wire:submit="save">
    <input type="file" wire:model="video" />

    @error('video')
        <span class="error">{{ $message }}</span>
    @enderror

    <button class="bg-blue-500" type="submit">Save video</button>
</form>
