<x-layout>
    <x-slot:heading>
        <div class="text-4xl font-bold text-gray-800 text-center py-4">
            Project Details
        </div>
    </x-slot:heading>

    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-semibold text-blue-600 mb-4">
            The {{ $project['title'] }} Project
        </h1>
        <ul class="list-disc pl-6 space-y-2 text-gray-700">
            <li>
                <span class="font-semibold text-gray-800">description:</span>
                {{ $project['description'] }}
            </li>

        </ul>
    </div>
</x-layout>