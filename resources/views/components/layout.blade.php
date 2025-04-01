<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/css/font.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="{{ asset('images/jimwell.png') }}">
  <title>{{ $title }}</title>
</head>
<body class="bg-gray-100">

  <header>
    <x-navbar></x-navbar>
    <div class="h-20"></div>
  </header>

  <x-main-card></x-main-card>

  <main>
    <div class="flex flex-col gap-1 mx-5">
        <nav class="bg-white border border-gray-200 rounded-lg shadow-sm py-2" id="navigation">
        <div class="flex flex-row mx-5 gap-3 md:gap-4">
            <a href="{{ route('index', [], false) }}#navigation" class="text-sm font-bold px-4 py-2 rounded-lg {{ request()->is('/') ? 'bg-blue-700 text-gray-50 ' : 'text-gray-900' }}">
                Projects
            </a>
            <a href="{{ route('experience', [], false) }}#navigation" class="text-sm font-bold px-4 py-2 rounded-lg {{ request()->is('experience') ? 'bg-blue-700 text-gray-50 ' : 'text-gray-900' }}">
                Experience
            </a>
            <a href="{{ route('skills', [], false) }}#navigation" class="text-sm font-bold px-4 py-2 rounded-lg {{ request()->is('skills') ? 'bg-blue-700 text-gray-50 ' : 'text-gray-900' }}">
                Skills
            </a>
            <a href="{{ route('certificates', [], false) }}#navigation" class="text-sm font-bold px-4 py-2 rounded-lg {{ request()->is('certificates') ? 'bg-blue-700 text-gray-50 ' : 'text-gray-900' }}">
                Certificates
            </a>
        </div>
        </nav>
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
            {{ $slot }}
        </div>
    </div>
    
  </main>

  <div class="h-10"></div>

  <footer>
    <p class="text-sm text-gray-900 w-full text-center">&copy; 2025 <a href="" class="font-semibold">ibayjimwell</a>, All Rights Reserved.</p>
  </footer>
  
</body>
</html>