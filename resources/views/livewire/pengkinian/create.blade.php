@section('title')
    Pengkinian Data Karyawan BPR Putera Dana
@endsection

<div class="bg-white">
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl pb-10">
            <form class="mt-10" wire:submit="store" enctype="multipart/form-data">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base/7 font-semibold text-gray-900">Personal Information</h2>
                        <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.
                        </p>

                        <div class="border-b border-gray-900/10 pb-12 mb-5">
                            {{-- </div> --}}
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                {{-- first name --}}
                                <div class="col-span-3">
                                    <label for="firstName" class="text-sm/6 font-medium text-gray-900">First
                                        Name</label>
                                    @error('firstName')
                                        <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2">
                                        <input wire:model.live="firstName" type="text" id="firstName"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                {{-- last name --}}
                                <div class="col-span-3">
                                    <label for="lastName" class=" text-sm/6 font-medium text-gray-900">Last
                                        Name</label>
                                    @error('lastName')
                                        <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2">
                                        <input wire:model.live="lastName" type="text" id="lastName"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                {{-- NIK --}}
                                <div class="col-span-3 lg:col-span-full">
                                    {{-- Input NIK --}}
                                    <label for="nik" class="text-sm font-medium text-gray-900">NIK</label>
                                    <input type="text" id="nik" wire:model.live="nik" maxlength="19"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">

                                    @error('nik')
                                        <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                    @enderror

                                </div>



                                {{-- email --}}
                                <div class="col-span-3">
                                    <label for="email" class=" text-sm/6 font-medium text-gray-900">Email
                                    </label>
                                    @error('email')
                                        <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2">
                                        <input wire:model.live="email" id="email" type="email"
                                            autocomplete="email"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                {{-- no hp --}}
                                <div class="col-span-3">
                                    <label for="noHp" class=" text-sm/6 font-medium text-gray-900">No Hp
                                    </label>
                                    @error('noHp')
                                        <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2">
                                        <input wire:model.live="noHp" type="number" id="noHp"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                {{-- tempat lahir --}}
                                <div class="col-span-3">
                                    <label for="tempatLahir" class=" text-sm/6 font-medium text-gray-900">Tempat
                                        Lahir
                                    </label>
                                    @error('tempatLahir')
                                        <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2">
                                        <input wire:model.live="tempatLahir" type="text" id="tempatLahir"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                {{-- tanggal lahir --}}
                                <div class="col-span-3">
                                    <label for="tanggalLahir" class=" text-sm/6 font-medium text-gray-900">Tanggal
                                        Lahir
                                    </label>
                                    @error('tanggalLahir')
                                        <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2">
                                        <input wire:model.live="tanggalLahir" type="date" id="tanggalLahir"
                                            class="block w-full bg-slate-300 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    </div>
                                </div>

                                {{-- jenis kelamin --}}
                                <div class="col-span-3">
                                    <label for="jenisKelamin" class=" text-sm/6 font-medium text-gray-900">Jenis
                                        Kelamin</label>
                                    @error('jenisKelamin')
                                        <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2">
                                        <select wire:model.live="jenisKelamin" id="jenisKelamin"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                            <option value="">-- Pilih Jenis Kelamin --</option>
                                            <option value="male">Laki-Laki</option>
                                            <option value="female">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- agama --}}
                                <div class="col-span-3">
                                    <label for="agama" class=" text-sm/6 font-medium text-gray-900">Agama</label>
                                    @error('agama')
                                        <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2">
                                        <select wire:model.live="agama" id="agama"
                                            class="block w-full rounded-md border-0
                                        py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2
                                        focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                            <option value="">-- Pilih Agama --</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mb-7">
                            {{-- alamat --}}
                            <div class="col-span-3 lg:col-span-full">
                                <label for="alamat" class=" text-sm/6 font-medium text-gray-900">Alamat</label>
                                @error('alamat')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <input wire:model.live="alamat" type="text" id="alamat"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <!-- Dropdown Provinsi -->
                            <div class="col-span-3">
                                <label for="province" class="block text-sm font-medium">Provinsi</label>
                                <select id="province" wire:model.live="selectedProvince"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                    <option value="">Pilih Provinsi</option>
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Dropdown Kota/Kabupaten -->
                            <div class="col-span-3">
                                <label for="regency" class="block text-sm font-medium">Kota/Kabupaten</label>
                                <select id="regency" wire:model.live="selectedRegency"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6"
                                    @if (empty($regencies)) disabled @endif>
                                    <option value="">Pilih Kota/Kabupaten</option>
                                    @foreach ($regencies as $regency)
                                        <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Dropdown Kecamatan -->
                            <div class="col-span-3">
                                <label for="district" class="block text-sm font-medium">Kecamatan</label>
                                <select id="district" wire:model.live="selectedDistrict"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6"
                                    @if (empty($districts)) disabled @endif>
                                    <option value="">Pilih Kecamatan</option>
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Dropdown Desa -->
                            <div class="col-span-3">
                                <label for="village" class="block text-sm font-medium">Kelurahan</label>
                                <select id="village" wire:model.live="selectedVillage"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6"
                                    @if (empty($villages)) disabled @endif>
                                    <option value="">Pilih Desa</option>
                                    @foreach ($villages as $village)
                                        <option value="{{ $village->id }}">{{ $village->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- ijasah --}}
                            <div class="col-span-3">
                                <label for="ijasahTerakhir" class=" text-sm/6 font-medium text-gray-900">Ijasah
                                    Terkahir</label>
                                @error('ijasahTerakhir')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <select wire:model.live="ijasahTerakhir" id="ijasahTerakhir"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                        <option value="">-- Pilih Ijasah Terakhir --</option>
                                        <option value="smp">SMP</option>
                                        <option value="sma">SMA</option>
                                        <option value="sarjana">S1 - Sarjana</option>
                                        <option value="sarjana">S2 - Magister</option>
                                    </select>
                                </div>
                            </div>

                            {{-- jabatan --}}
                            <div class="col-span-3">
                                <label for="jabatanSekarang" class=" text-sm/6 font-medium text-gray-900">Jabatan
                                    Sekarang</label>
                                @error('jabatanSekarang')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <select wire:model="jabatanId" id="jabatanSekarang"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                        <option value="">-- Pilih Jabatan --</option>
                                        @foreach ($jabatanSekarang as $jabatan)
                                            <option value="{{ $jabatan->id }}">{{ $jabatan->jabatan }}</option>
                                        @endforeach
                                        {{-- <option value="karyawan">Karyawan</option> --}}
                                    </select>
                                </div>
                            </div>

                            {{-- tanggal Masuk --}}
                            <div class="col-span-3">
                                <label for="tanggalMasuk" class=" text-sm/6 font-medium text-gray-900">Tanggal
                                    Masuk
                                </label>
                                @error('tanggalMasuk')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <input wire:model.live="tanggalMasuk" type="date" id="tanggalMasuk"
                                        class="block w-full bg-slate-300 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            {{-- Kantor Penempatan --}}
                            <div class="col-span-3">
                                <label for="kantor" class=" text-sm/6 font-medium text-gray-900">Kantor Penempatan
                                </label>
                                @error('kantor')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <select wire:model="kantorId" id="kantor"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                        <option value="">-- Pilih Kantor --</option>
                                        @foreach ($kantor as $kantor)
                                            <option value="{{ $kantor->id }}">{{ $kantor->kantor }}</option>
                                        @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- foto --}}
                        <div class="col-span-full">
                            <label for="fotoKtp" class=" text-sm/6 font-medium text-gray-900">Foto
                                KTP</label>
                            @error('fotoKtp')
                                <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                            @enderror
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <!-- Jika foto sudah diupload, hanya tampilkan preview dan tombol upload ulang -->
                                    <!-- Preview Foto -->
                                    @if ($fotoKtp)
                                        <p>Photo Preview:</p>
                                        <img src="{{ $fotoKtp->temporaryUrl() }}" alt="Preview Foto"
                                            class="mx-auto mt-4 mx--5 max-h-60 object-cover rounded-md">

                                        <!-- Tombol Upload Ulang -->
                                        <div class="mt-4 flex justify-center items-center">
                                            <label for="fotoKtp"
                                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span class="align-middle">Upload a new file</span>
                                                <input wire:model="fotoKtp" id="fotoKtp" type="file"
                                                    class="sr-only">
                                            </label>
                                        </div>
                                    @else
                                        <!-- Form Upload Awal -->
                                        <div class="text-center">
                                            <label for="fotoKtp"
                                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input wire:model="fotoKtp" id="fotoKtp" type="file"
                                                    class="sr-only">
                                            </label>
                                            <p class="text-xs text-gray-600">PNG, JPG, GIF up to 5MB</p>
                                        </div>
                                    @endif

                                    @error('fotoKtp')
                                        <span class="text-red-600">{{ $message }}</span>
                                    @enderror

                                    <!-- Indikator Loading -->
                                    <div wire:loading wire:target="fotoKtp" class="text-center text-blue-500 mt-2">
                                        <p>Uploading...</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
        </div>


    </div>
    {{-- <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div> --}}
</div>
</div>
