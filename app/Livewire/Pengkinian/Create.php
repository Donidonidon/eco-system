<?php

namespace App\Livewire\Pengkinian;

use App\Models\User;
use App\Models\Kantor;
use App\Models\Jabatan;
use App\Models\Profile;
use App\Models\Regency;
use App\Models\Village;
use Livewire\Component;
use App\Models\District;
use App\Models\Province;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\CreateNewUser;

class Create extends Component
{
    use WithFileUploads;

    #[Rule('required', message: 'Masukkan Nama Depan!')]
    public $firstName;

    #[Rule('required', message: 'Masukkan Nama Belakang!')]
    public $lastName;

    #[Rule('required', message: 'Masukkan Email!')]
    #[Rule('email', message: 'Masukkan Email yang benar!')]
    public $email;

    #[Rule('required', message: 'Masukkan NIK!')]
    #[Rule('max:19', message: 'Minimal 16 karakter!')]
    public $nik;

    #[Rule('required', message: 'Masukkan No HP!')]
    public $noHp;

    #[Rule('required', message: 'Masukkan Tempat Lahir!')]
    public $tempatLahir;

    #[Rule('required', message: 'Masukkan Tanggal Lahir!')]
    public $tanggalLahir;

    #[Rule('required', message: 'Masukkan Jenis Kelamin!')]
    public $jenisKelamin;

    #[Rule('required', message: 'Pilih Agama Anda!')]
    public $agama;

    #[Rule('required', message: 'Masukkan Alamat!')]
    public $alamat;

    #[Rule('required', message: 'Masukkan Ijasah Terakhir!')]
    public $ijasahTerakhir;

    #[Rule('required', message: 'Masukkan Jabatan Sekarang!')]
    public $jabatanSekarang;
    public $jabatanId;

    #[Rule('required', message: 'Masukkan Tanggal Masuk!')]
    public $tanggalMasuk;

    #[Rule('required', message: 'Mohon Masukkan Nama Kantor!')]
    public $kantor;
    public $kantorId;

    #[Rule('required', message: 'Masukkan Gambar Post!')]
    #[Rule('image', message: 'File Harus Gambar!')]
    #[Rule('max:5120', message: 'Ukuran File Maksimal 5MB!')]
    public $fotoKtp;

    public $provinces = [];
    public $regencies = [];
    public $districts = [];
    public $villages = [];

    public $selectedProvince = null;
    public $selectedRegency = null;
    public $selectedDistrict = null;
    public $selectedVillage = null;

    public function mount()
    {
        $this->provinces = Province::all(); // Ambil data provinsi
        $this->jabatanSekarang = Jabatan::all();
        $this->kantor = Kantor::all();
    }

    public function updatedSelectedProvince($value)
    {
        $this->regencies = Regency::where('province_id', $value)->get();
        $this->selectedRegency = null;
        $this->districts = [];
        $this->villages = [];
    }

    public function updatedSelectedRegency($value)
    {
        $this->districts = District::where('regency_id', $value)->get();
        $this->selectedDistrict = null;
        $this->villages = [];
    }

    public function updatedSelectedDistrict($value)
    {
        $this->villages = Village::where('district_id', $value)->get();
        $this->selectedVillage = null;
    }

    public function updatedNik($value)
    {
        // Hilangkan tanda hubung yang sudah ada untuk menghindari duplikasi
        $value = str_replace('-', '', $value);

        // Sisipkan tanda hubung setiap 4 karakter
        $formattedNik = substr($value, 0, 4); // Ambil 4 karakter pertama
        for ($i = 4; $i < strlen($value); $i += 4) {
            $formattedNik .= '-' . substr($value, $i, 4);
        }

        // Simpan hasil format kembali ke properti NIK
        $this->nik = $formattedNik;
    }


    public function store()
    {
        $this->validate();

        //store image in storage/app/public/posts
        $this->fotoKtp->storeAs('public/ktp', $this->fotoKtp->hashName());

        $user = User::create([
            'name' => $this->firstName,
            'email' => $this->email,
            'password' => Hash::make($this->firstName),
        ]);

        Profile::create([
            'user_id' => $user->id,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'nik' => $this->nik,
            'no_hp' => $this->noHp,
            'tempat_lahir' => $this->tempatLahir,
            'tanggal_lahir' => $this->tanggalLahir,
            'jenis_kelamin' => $this->jenisKelamin,
            'agama' => $this->agama,

            'alamat' => $this->alamat,
            'provinces_id' => $this->selectedProvince,
            'regencies_id' => $this->selectedRegency,
            'districts_id' => $this->selectedDistrict,

            'ijasah_terakhir' => $this->ijasahTerakhir,
            'jabatan_sekarang' => $this->jabatanId,
            'tanggal_masuk' => $this->tanggalMasuk,
            'kantor' => $this->kantorId,
            'foto_ktp' => $this->fotoKtp->hashName(),
        ]);

        session()->flash('success', 'Data Berhasil Ditambahkan');

        return redirect()->route('welcome');
    }



    public function render()
    {
        return view('livewire.pengkinian.create');
    }
}
