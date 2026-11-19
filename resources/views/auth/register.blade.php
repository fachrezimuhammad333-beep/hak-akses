<<<<<<< HEAD
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Aplikasi Laundry</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b1b] flex min-h-screen flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white p-6">
    <div class="w-full max-w-md bg-white dark:bg-[#161615] rounded-lg shadow-md p-8 border border-[#e3e3e0] dark:border-[#3E3E3A]">
        <h2 class="text-2xl font-semibold text-center mb-6 text-[#1b1b1b] dark:text-white">Form Register</h2>
        
        <form action="/register" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium mb-1 text-gray-700 dark:text-gray-300">Nama</label>
                <input type="text" name="name" required class="w-full px-3 py-2 border rounded-md dark:bg-[#111110] dark:border-[#3E3E3A] dark:text-white focus:outline-none focus:ring-2 focus:ring-[#FF2D20]">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1 text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" required class="w-full px-3 py-2 border rounded-md dark:bg-[#111110] dark:border-[#3E3E3A] dark:text-white focus:outline-none focus:ring-2 focus:ring-[#FF2D20]">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1 text-gray-700 dark:text-gray-300">Password</label>
                <input type="password" name="password" required class="w-full px-3 py-2 border rounded-md dark:bg-[#111110] dark:border-[#3E3E3A] dark:text-white focus:outline-none focus:ring-2 focus:ring-[#FF2D20]">
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-[#FF2D20] hover:bg-red-600 text-white font-semibold rounded-md transition duration-200">
                Daftar
            </button>
        </form>
    </div>
</body>
=======
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Aplikasi Laundry</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b1b] flex min-h-screen flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white p-6">
    <div class="w-full max-w-md bg-white dark:bg-[#161615] rounded-lg shadow-md p-8 border border-[#e3e3e0] dark:border-[#3E3E3A]">
        <h2 class="text-2xl font-semibold text-center mb-6 text-[#1b1b1b] dark:text-white">Form Register</h2>
        
        <form action="/register" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium mb-1 text-gray-700 dark:text-gray-300">Nama</label>
                <input type="text" name="name" required class="w-full px-3 py-2 border rounded-md dark:bg-[#111110] dark:border-[#3E3E3A] dark:text-white focus:outline-none focus:ring-2 focus:ring-[#FF2D20]">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1 text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" required class="w-full px-3 py-2 border rounded-md dark:bg-[#111110] dark:border-[#3E3E3A] dark:text-white focus:outline-none focus:ring-2 focus:ring-[#FF2D20]">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1 text-gray-700 dark:text-gray-300">Password</label>
                <input type="password" name="password" required class="w-full px-3 py-2 border rounded-md dark:bg-[#111110] dark:border-[#3E3E3A] dark:text-white focus:outline-none focus:ring-2 focus:ring-[#FF2D20]">
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-[#FF2D20] hover:bg-red-600 text-white font-semibold rounded-md transition duration-200">
                Daftar
            </button>
        </form>
    </div>
</body>
>>>>>>> b2eed6e89aa5ab12736d8a36999a24c1423983a5
</html>