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
  <title>ibayjimwell | Project List</title>
</head>
<body class="bg-gray-100">

    <header>
        <x-navbar></x-navbar>
        <div class="h-16"></div>
  </header>

    <div class="flex flex-row gap-3 flex-wrap mx-2 my-4 justify-center">
        @foreach ($projects as $project)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                <a href="{{ $project->project_url }}">
                    <img class="h-auto max-w-lg mx-auto" src="{{ asset($project->project_image_path) }}" alt="{{ $project->project_name }} image" />
                </a>
                <div class="p-5">
                    <a href="{{ $project->project_url }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $project->project_name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">{{ $project->project_description }}</p>
                    <a href="{{ $project->project_url }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        Visit
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>