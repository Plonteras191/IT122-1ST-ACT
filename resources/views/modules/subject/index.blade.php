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

                <hr class="mt-6 mb-6">

                <table class="table tablebordered p-2">
                    <thead>
                        <th>#</th>
                        <th>Code</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Lab Unit</th>
                        <th>Lec Unit</th>
                        <th>Total Unit</th>
                    </thead>
                </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
