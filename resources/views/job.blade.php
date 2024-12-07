<x-layout title="about">
    <x-slot:heading>Job Page </x-slot:heading>
    <h1> Hello from the Job Page </h1>
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-semibold text-blue-600 mb-4">
            The {{ $job['title'] }} job
        </h1>
        <ul class="list-disc pl-6 space-y-2 text-gray-700">
            <li>
                <span class="font-semibold text-gray-800">Saraly:</span>
                {{ $job['salary'] }}
            </li>
        </ul>
    </div>
</x-layout>