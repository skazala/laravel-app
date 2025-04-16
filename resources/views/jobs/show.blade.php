<x-layout>
    <div class="flex-1 flex flex-col text-center">
        <h3 class="font-bold text-2xl mt-3">
            {{ $job->title }}
        </h3>
        <p><a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a></p>
        <p class="text-sm text-gray-400 mt-5">{{ $job->schedule }} - from {{ $job->salary }}</p>
    </div>
</x-layout>