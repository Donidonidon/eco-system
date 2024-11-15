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
            <form class="mt-10" wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base/7 font-semibold text-gray-900">Personal Information</h2>
                        <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.
                        </p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            {{-- first name --}}
                            <div class="sm:col-span-3">
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
                            <div class="sm:col-span-3">
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

                            {{-- nik --}}
                            <div class="col-span-full">
                                <label for="nik" class=" text-sm/6 font-medium text-gray-900">NIK</label>
                                @error('nik')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <input wire:model.live="nik" type="number" id="nik"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            {{-- email --}}
                            <div class="sm:col-span-3">
                                <label for="email" class=" text-sm/6 font-medium text-gray-900">Email
                                </label>
                                @error('email')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <input wire:model.live="email" id="email" type="email" autocomplete="email"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            {{-- no hp --}}
                            <div class="sm:col-span-3">
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
                            <div class="sm:col-span-3">
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
                            <div class="sm:col-span-3">
                                <label for="tanggalLahir" class=" text-sm/6 font-medium text-gray-900">Tanggal
                                    Lahir
                                </label>
                                @error('tanggalLahir')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <input wire:model.live="tanggalLahir" type="date" id="tanggalLahir"
                                        class="block w-full bg-slate-100 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            {{-- jenis kelamin --}}
                            <div class="sm:col-span-3">
                                <label for="jenisKelamin" class=" text-sm/6 font-medium text-gray-900">Jenis
                                    Kelamin</label>
                                @error('jenisKelamin')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <select wire:model.live="jenisKelamin" id="jenisKelamin"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                        <option value="male">Laki-Laki</option>
                                        <option value="female">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            {{-- alamat --}}
                            <div class="col-span-full">
                                <label for="alamat" class=" text-sm/6 font-medium text-gray-900">Alamat</label>
                                @error('alamat')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <input wire:model.live="alamat" type="text" id="alamat"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            {{-- ijasah --}}
                            <div class="sm:col-span-3">
                                <label for="ijasahTerakhir" class=" text-sm/6 font-medium text-gray-900">Ijasah
                                    Terkahir</label>
                                @error('ijasahTerakhir')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <select wire:model.live="ijasahTerakhir" id="ijasahTerakhir"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                        <option value="smp">SMP</option>
                                        <option value="sma">SMA</option>
                                        <option value="sarjana">S1 - Sarjana</option>
                                    </select>
                                </div>
                            </div>

                            {{-- jabatan --}}
                            <div class="sm:col-span-3">
                                <label for="jabatanSekarang" class=" text-sm/6 font-medium text-gray-900">Jabatan
                                    Sekarang</label>
                                @error('jabatanSekarang')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <select wire:model.live="jabatanSekarang" id="jabatanSekarang"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                        <option value="karyawan">Karyawan</option>
                                        <option value="direksi">Direksi</option>
                                    </select>
                                </div>
                            </div>

                            {{-- tanggal Masuk --}}
                            <div class="sm:col-span-3">
                                <label for="tanggalMasuk" class=" text-sm/6 font-medium text-gray-900">Tanggal
                                    Masuk
                                </label>
                                @error('tanggalMasuk')
                                    <span class="ml-1 text-red-500 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                <div class="mt-2">
                                    <input wire:model.live="tanggalMasuk" type="date" id="tanggalMasuk"
                                        class="block w-full bg-slate-100 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
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
                                        @if ($fotoKtp)
                                            <p>Photo Preview:</p>
                                            <img src="{{ $fotoKtp->temporaryUrl() }}" alt="Preview Foto"
                                                class="mx-auto mt-4 mx--5 max-h-60 object-cover rounded-md">

                                            <div
                                                class="mt-4 flex text-sm text-gray-600 flex justify-center items-center">
                                                <label for="foto_ktp"
                                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                    <span class="align-middle">Upload a new file</span>
                                                    <input wire:model.live="fotoKtp" id="fotoKtp" type="file"
                                                        class="sr-only">
                                                </label>
                                            </div>
                                        @else
                                            <!-- Jika foto belum diupload, tampilkan ikon, teks, dan tombol upload -->
                                            <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div wire:loading wire:target="fotoKtp">Uploading...</div>
                                            <div class="mt-4 flex text-sm text-gray-600">
                                                <label for="fotoKtp"
                                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600">
                                                    <span>Upload a file</span>
                                                    <input wire:model.live="fotoKtp" id="fotoKtp" type="file"
                                                        class="sr-only">


                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-600">PNG, JPG, GIF up to 5MB</p>
                                        @endif

                                        <!-- Menampilkan pesan error jika ada -->
                                        @error('fotoKtp')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
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
        {{-- <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div> --}}
    </div>
</div>
