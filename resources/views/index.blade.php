<x-layout>
    <x-slot:title>
        ibayjimwell | Projects
    </x-slot:title>

    <div class="flex flex-row gap-1 flex-wrap mx-4 my-4">
        @foreach ($projects as $project)
            <a href="{{ $project->project_url }}">
                <div class="max-w-sm bg-white hover:bg-gray-50 border border-gray-200 rounded-lg shadow-lg cursor-pointer">
                    <div class="flex flex-row gap-2">
                        <div>
                            <img class="rounded-s-md h-full w-80" src="{{ asset($project->project_image_path) }}" alt="{{ $project->project_name }} image" />
                        </div>
                        <div class="p-5">
                            <div href="#">
                                <h5 class="mb-2 text-md font-bold tracking-tight cursor-pointer">{{ $project->project_name }}</h5>
                            </div>
                            <p class="mb-3 text-sm font-normal text-gray-700 cursor-pointer">{{ $project->project_description }}</p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

</x-layout>