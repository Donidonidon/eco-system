<?php

namespace App\Livewire;

use App\Models\Dummy as modelDummy;
use Livewire\Component;

use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class Dummy extends Component
{
    use WithFileUploads;

    #[Rule('required', message: 'Name is required')]
    #[Rule('min:5', message: 'Name must be at least 5 characters')]
    public $name;

    #[Rule('required', message: 'Masukkan Gambar Post')]
    #[Rule('image', message: 'File Harus Gambar')]
    #[Rule('max:5120', message: 'Ukuran File Maksimal 5MB')]
    public $imageDummy;

    public function store()
    {
        $this->validate();

        //store image in storage/app/public/posts
        $this->imageDummy->storeAs('public/dummy', $this->imageDummy->hashName());

        modelDummy::create([
            'name' => $this->name,
            'image' => $this->imageDummy->hashName(),
        ]);

        // session()->flash('success', 'Data Berhasil Ditambahkan');

        return redirect()->route('welcome');
    }

    public function render()
    {
        return view('livewire.dummy');
    }
}
