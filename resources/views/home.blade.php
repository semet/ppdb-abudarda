<x-layouts.main>
    {{-- Notification --}}
    <x-shared.reminder/>
    {{-- Form --}}
    <div class="mt-6 bg-white shadow-lg rounded-md p-4">
        {{-- Card Header --}}
        <div class="flex gap-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>

            <h3 class="text-2xl font-medium text-gray-700">Informasi Akun</h3>
        </div>
        <hr class="mt-2">

        <div class="bg-rose-500 px-4 py-2 my-4 rounded-md">
            <p class="text-gray-100 text-lg">Anda harus memiliki E-mail dan No. Telepon yang valid untuk menerima informasi lebih lanjut tentang pendaftaran.</p>
        </div>
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-6">
                <div class="">
                    <div class="flex flex-col gap-2 relative">
                        <label for="no_telepon" class="text-gray-600">No. Telepon</label>
                        <input type="text" name="no_telepon" id="no_telepon" class="border-indigo-400 rounded-md @error('no_telepon') border-rose-800 @enderror">
                        @error('no_telepon')
                        <div class="absolute -bottom-2 right-0 p-1 text-xs bg-rose-500 rounded-md shadow-sm text-gray-100">{{$message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mt-4 relative">
                        <label for="email" class="text-gray-600">Email</label>
                        <input type="text" name="email" id="email" class="border-indigo-400 rounded-md @error('eemail') border-rose-800 @enderror">
                        @error('email')
                        <div class="absolute -bottom-2 right-0 p-1 text-xs bg-rose-500 rounded-md shadow-sm text-gray-100">{{$message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="">
                    <div class="flex flex-col gap-2 relative">
                        <label for="password" class="text-gray-600">Password</label>
                        <input type="text" name="password" id="password" class="border-indigo-400 rounded-md @error('password') border-rose-800 @enderror">
                        @error('password')
                        <div class="absolute -bottom-2 right-0 p-1 text-xs bg-rose-500 rounded-md shadow-sm text-gray-100">{{$message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mt-4 relative">
                        <label for="password_confirmation" class="text-gray-600">Konfirmasi Password</label>
                        <input type="text" name="password_confirmation" id="password_confirmation" class="border-indigo-400 rounded-md">
                    </div>
                </div>
            </div>
            <div class="flex justify-center my-6">
                <button class="px-4 py-2 bg-sky-600 hover:bg-sky-500 text-gray-200 rounded-md shadow-lg" type="submit">Submit</button>
            </div>

        </form>
    </div>
</x-layouts.main>
