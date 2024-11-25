<x-layout>
    <x-slot:heading>
        Projects
    </x-slot:heading>
    @foreach ($projects as $project)
    <a href="{{$project['id']}}/project" class="text-blue-500 hover:font-semibold hover:underline">
        <h1>The <strong> {{$project['name']}}</strong> Project </h1>
    </a>
    @endforeach
</x-layout>