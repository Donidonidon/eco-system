<form wire:submit="store" enctype="multipart/form-data">
    <input type="text" wire:model="name">
    @error('name')
        <span class="error">{{ $message }}</span>
    @enderror

    <br>
    <input type="file" wire:model="imageDummy">

    @error('imageDummy')
        <span class="error">{{ $message }}</span>
    @enderror
    <br>
    <button
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600""
        type="submit">Save photo</button>
</form>
