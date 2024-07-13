<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    {{--  New task  --}}
    <div class="my-2 flex flex-col items-center justify-evenly">
        <form method="post" action="{{ route('tasks.store') }}">
            @csrf

            <fieldset>
            <legend>{{ __("Create a new task") }}</legend>

            <label for="title">{{ __("Title") }}: <input name="title" class="rounded-md"></label>
            <label for="description">{{ __("Description") }}: <input name="description" class="rounded-md"></label>
            </fieldset>

            <button type="submit" class="rounded hover:bg-gray-400 bg-gray-300">Save</button>
        </form>
    </div>

    {{--  Display tasks  --}}
    @if(count($tasks) <= 0)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("No tasks!") }}
                    </div>
                </div>
            </div>
        </div>
    @else
        @foreach($tasks as $task)
            <div class="my-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <x-task-card :task="$task" />
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</x-app-layout>
