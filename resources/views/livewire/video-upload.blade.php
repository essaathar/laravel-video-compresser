{{-- <div>
    <form wire:submit="save">
        <input type="file" wire:model="video"/>

        @error('video')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit" class="bg-blue-500 p-2">Save video</button>
    </form>
</div> --}}
<div>
    <form wire:submit="save">
        <input type="file" wire:model="video" accept=".mp4"
            class="bg-gray-200 border-dashed border-2 border-black p-2 rounded-xl" />

        @error('video')
            <span class="error">{{ $message }}</span>
        @enderror

        <button class="bg-blue-200 p-2 rounded-2xl ml-4 cursor-pointer hover:bg-blue-400" type="submit">Save
            video</button>
    </form>
    <button class="bg-pink-300 p-2 rounded-2xl mt-4 cursor-pointer hover:bg-pink-400"
        wire:click="compress">Compress</button>
</div>
