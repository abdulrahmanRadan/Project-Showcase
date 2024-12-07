<x-layout>
    <x-slot:heading>Job Page </x-slot:heading>
    <h1> Hello from the Contact Page </h1>
    @foreach ($jobs as $job)
    <a href="{{$job['id']}}/job" class="text-blue-500 hover:font-semibold hover:underline">
        <h1>The <strong> {{$job['title']}}</strong> job </h1>
    </a>
    @endforeach
</x-layout>