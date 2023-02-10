<x-layouts.main>

    <x-shared.reminder/>

    <div class="my-6 bg-white shadow-lg rounded-md p-4">
        {{-- Card Header --}}
        <div class="flex gap-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>

            <h3 class="text-2xl font-medium text-gray-700">Biodata Siswa</h3>
        </div>
        <hr class="mt-2">

        <form  action="" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-6">
                <div class="mt-4">
                    <div class="flex flex-col gap-2 relative">
                        <label for="nama_lengkap" class="text-gray-600">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="border-indigo-400 rounded-md">
                    </div>

                    <div class="flex flex-col gap-2 my-4 relative">
                        <label for="nama_panggilan" class="text-gray-600">Nama Panggilan</label>
                        <input type="text" name="nama_panggilan" id="nama_panggilan" class="border-indigo-400 rounded-md">
                    </div>

                    <div class="flex flex-col gap-2 my-4 relative">
                        <label for="no_induk_asal" class="text-gray-600">Nomor Induk Asal</label>
                        <input type="text" name="no_induk_asal" id="no_induk_asal" class="border-indigo-400 rounded-md">
                    </div>

                    <div class="flex flex-col gap-2 my-4 relative">
                        <label for="nisn" class="text-gray-600">NISN</label>
                        <input type="text" name="nisn" id="nisn" class="border-indigo-400 rounded-md">
                    </div>

                    <div class="flex flex-col gap-2 my-4 relative">
                        <label for="tempat_lahir" class="text-gray-600">Tempat Lahir</label>
                       <textarea name="tempat_lahir" id="tempat_lahir" rows="3" class="border-indigo-400 rounded-md"></textarea>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="flex flex-col gap-2 relative">
                        <label for="tanggal_lahir" class="text-gray-600">Tanggal Lahir</label>
                        <div class="absolute inset-y-0 left-0 top-7 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input datepicker datepicker-autohide atepicker-format="yyy/mm/dd" type="text" name="tanggal_lahir" id="tanggal_lahir" class="border-indigo-400 rounded-md pl-10">
                    </div>
                    <div class="flex gap-4 my-4">
                        <div class="flex flex-col gap-2 relative">
                            <label for="jenis_kelamin" class="text-gray-600">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="border-indigo-400 rounded-md text-gray-600">
                                <option value="">--Pilih Jenis Kelamin--</option>
                            </select>
                        </div>
                        <div class="flex-1 flex flex-col gap-2 relative">
                            <label for="agama" class="text-gray-600">Agama</label>
                            <select name="agama" id="agama" class="border-indigo-400 rounded-md text-gray-600">
                                <option value="">--Pilih Agama--</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex gap-4 my-4">
                        <div class="flex flex-col gap-2 relative">
                            <div class="flex flex-col gap-2 relative">
                                <label for="anak_ke" class="text-gray-600">Anak Ke</label>
                                <input type="text" name="anak_ke" id="anak_ke" class="border-indigo-400 rounded-md">
                            </div>
                        </div>
                        <div class="flex-1 flex flex-col gap-2 relative">
                            <label for="status_dalam_keluarga" class="text-gray-600">Status Dalam Keluarga</label>
                            <select name="status_dalam_keluarga" id="status_dalam_keluarga" class="border-indigo-400 rounded-md text-gray-600">
                                <option value="">--Pilih Status--</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 my-4 relative">
                        <label for="alamat" class="text-gray-600">Alamat</label>
                       <textarea name="alamat" id="alamat" rows="3" class="border-indigo-400 rounded-md"></textarea>
                    </div>

                    <div class="flex justify-start">

                        <button class="px-4 py-2 bg-sky-600 hover:bg-sky-500 text-gray-200 rounded-md shadow-lg" type="submit">Submit</button>

                    </div>
                </div>
            </div>
        </form>

    </div>

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
    @endpush
</x-layouts.main>

