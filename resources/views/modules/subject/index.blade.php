<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List of Subjects
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg">
                <div style="padding: 20px">
                <a href="{{ route('subjects.create') }}" class="text-white p-2 rounded-lg border"
                    style="background-color: rgb(17, 106, 136)">Create Subject
                </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
