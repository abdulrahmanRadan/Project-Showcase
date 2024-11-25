<x-layout>
    <x-slot:heading>
        <div class="text-4xl font-bold text-gray-800 text-center py-4">
            Project Details
        </div>
    </x-slot:heading>

    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-semibold text-blue-600 mb-4">
            The {{ $project['name'] }} Project
        </h1>
        <ul class="list-disc pl-6 space-y-2 text-gray-700">
            <li>
                <span class="font-semibold text-gray-800">Created On:</span>
                {{ $project['date']->format('Y-m-d') }}
                <span class="italic text-gray-500">
                    ({{ $project['date']->diff(new DateTime())->format('%y years, %m months, %d days ago') }})
                </span>
            </li>
            <li>
                <span class="font-semibold text-gray-800">Language:</span>
                {{ $project['language'] }}
            </li>
            @if (!empty($project['fremwork']))
            @foreach ($project['fremwork'] as $fremwork)
            <li>
                <span class="font-semibold text-gray-800">Framework:</span>
                {{ $fremwork }}
            </li>
            @endforeach
            @else
            <li>
                <span class="font-semibold text-gray-800">Framework:</span>
                <span class="text-gray-500 italic">No frameworks listed</span>
            </li>
            @endif
        </ul>
    </div>
</x-layout>