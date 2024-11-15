<?php

namespace App\Livewire\Pengkinian;

use App\Models\Profile;
use App\Models\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;

class Create extends Component
{
    use WithFileUploads;

    #[Rule('required', message: 'Masukkan Nama Depan')]
    #[Rule('min:5', message: 'minimal 5 karakter')]
    public $firstName;

    #[Rule('required', message: 'Masukkan Nama Belakang')]
    public $lastName;

    #[Rule('required', message: 'Masukkan Email')]
    public $email;

    #[Rule('required', message: 'Masukkan NIK')]
    public $nik;

    #[Rule('required', message: 'Masukkan No HP')]
    public $noHp;

    #[Rule('required', message: 'Masukkan Tempat Lahir')]
    public $tempatLahir;

    #[Rule('required', message: 'Masukkan Tanggal Lahir')]
    public $tanggalLahir;

    #[Rule('required', message: 'Masukkan Jenis Kelamin')]
    public $jenisKelamin;

    #[Rule('required', message: 'Masukkan Alamat')]
    public $alamat;

    #[Rule('required', message: 'Masukkan Ijasah Terakhir')]
    public $ijasahTerakhir;

    #[Rule('required', message: 'Masukkan Jabatan Sekarang')]
    public $jabatanSekarang;

    #[Rule('required', message: 'Masukkan Tanggal Masuk')]
    public $tanggalMasuk;

    #[Rule('required', message: 'Masukkan Gambar Post')]
    #[Rule('image', message: 'File Harus Gambar')]
    #[Rule('max:5120', message: 'Ukuran File Maksimal 1MB')]
    public $fotoKtp;

    public function store()
    {
        $this->validate();

        //store image in storage/app/public/posts
        $this->image->storeAs('public/ktp', $this->image->hashName());

        $userID = User::create([
            'name' => $this->firstName,
            'email' => $this->email,
            'password' => bcrypt('12345678'),
        ]);

        // Gabungkan nama depan dan belakang untuk kolom 'name'
        $fullName = trim($this->firstName . ' ' . $this->lastName);

        Profile::create([
            'user_id' => $userID->id,
            'name' => $fullName,
            'email' => $this->email,
            'nik' => $this->nik,
            'no_hp' => $this->noHp,
            'tempat_lahir' => $this->tempatLahir,
            'tanggal_lahir' => $this->tanggalLahir,
            'jenis_kelamin' => $this->jenisKelamin,
            'alamat' => $this->alamat,
            'ijasah_terakhir' => $this->ijasahTerakhir,
            'jabatan_sekarang' => $this->jabatanSekarang,
            'tanggal_masuk' => $this->tanggalMasuk,
            'foto_ktp' => $this->image->hashName(),
        ]);

        session()->flash('success', 'Data Berhasil Ditambahkan');

        return redirect()->route('welcome');
    }



    public function render()
    {
        return view('livewire.pengkinian.create');
    }
}
