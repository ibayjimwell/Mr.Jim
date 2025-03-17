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

    <nav class="bg-blue-700 fixed w-full z-20 top-0 start-0">
        <div class="flex flex-wrap items-center justify-between mx-auto md:mx-10 p-4">
            <a href="/" class="flex items-center pace-x-3 rtl:space-x-reverse">
                <h1 class="text-white font-bold text-xl md:text-2xl">
                    ibayjimwell
                </h1>
            </a>
            <a href="https://github.com/ibayjimwell" class="flex items-center pace-x-3 rtl:space-x-reverse">
                <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                </svg>
            </a>
        </div>
    </nav>

    <div class="h-20"></div>

    <div class="flex flex-col md:flex-row gap-4 justify-center mx-5">
        <article class="flex justify-center">
            <div class="p-10 bg-white border border-gray-200 rounded-lg shadow-sm">
                <div class="flex flex-row gap-10">
                    <div>
                        <h1 class="flex flex-col gap-4 mb-2 text-5xl font-bold tracking-tight text-gray-900">
                            <div>I will turning Ideas</div>
                            <div>Into <span class="text-blue-600">Modern & Scalable</span></div>
                            <div>Web Applications</div>
                        </h1>
                        <p class="mt-6 font-normal text-gray-700">
                            <div class="text-xl">A software engineer that's can build <span class="font-bold">desktop</span> and </div>
                            <div class="text-xl"><span class="font-bold">web applications</span> to provide solution to a certain problem.</div>
                        </p>
                        <a href="#" class="mt-6 inline-flex items-center px-4 py-3 text-md font-semibold text-center text-white bg-blue-700 hover:bg-blue-800">
                            Let's Work Together
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <img class="h-auto w-64 hidden md:block" src="{{ asset('images/jimwell.png') }}" alt="Jimwell Ibay">
                    </div>
                </div>
            </div>
        </article>
        
        <article class="flex justify-center">
            <div class="p-10 bg-white border border-gray-200 rounded-lg shadow-sm">
                <div class="flex flex-row gap-10">
                    <div>
                        <h1 class="flex flex-col gap-4 mb-2 text-5xl font-bold tracking-tight text-gray-900">
                            <div>I Am Building</div>
                            <div>Software <span class="text-blue-600">Solutions</span></div>
                            <div>To Drive Industry Growth</div>
                        </h1>
                        <p class="mt-6 font-normal text-gray-700">
                            <div class="text-xl">I work with implementing programming principles like</div>
                            <div class="text-xl"><span class="font-bold">DRY</span>, <span class="font-bold">KISS</span>, <span class="font-bold">Clean Code</span> and <span class="font-bold">OOP</span>.</div>
                        </p>
                        <a href="#" class="mt-6 inline-flex items-center px-4 py-3 text-md font-semibold text-center text-white bg-blue-700 hover:bg-blue-800">
                            Download My CV
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <img class="h-auto w-64 hidden md:block" src="{{ asset('images/cv.jpg') }}" alt="Jimwell Ibay CV">
                    </div>
                </div>
            </div>
        </article>
    </div>

  </header>

  <div class="h-4"></div>

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