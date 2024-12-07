<x-layout>
    <x-slot:heading>Job Page </x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
        <a href="{{$job['id']}}/job" class=" block px-4 py-6 border border-gray-200 rounded-lg">
            <strong> {{$job['title']}}</strong> pays {{ $job['salary'] }} per year.
        </a>
        @endforeach
    </div>
</x-layout>