@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="text-sm text-gray-500 font-semibold">{{$job->employer->name}}</a>
        <h3 class="text-xl font-bold mt-2 group-hover:text-blue-800 transition-colors duritation-300">{{$job->title}}</h3>
        <p class="text-sm text-gray-500 mt-auto">{{$job->salary}}</p>
    </div>

    <div class="space-x-1">
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
