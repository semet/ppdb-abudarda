<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB Abudarda</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <div class="container max-w-screen-xl  mx-auto">
        <header class="flex justify-center items-center h-[450px] bg-cover bg-center shadow-lg rounded-b-md bg-gradient-to-br from-cyan-500 to-indigo-400">
            <h1 class="text-right text-3xl text-gray-200">
                Selamat datang di formulir pendaftaranh <br>
                <span class="text-5xl">Siswa Baru Abudarda</span>
            </h1>
        </header>

        {{ $slot }}
    </div>


    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>
