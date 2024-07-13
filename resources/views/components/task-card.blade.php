<div class="shadow-gray-400 rounded">
    <a href="{{ route('tasks.show', $task) }}">
        <p class="text-xl font-bold">
            {{ __($task->title) }}
        </p>

        @if(! Str::is($task->created_at, $task->updated_at))
            <p class="text-sm">
                {{ __("edited") }}
            </p>
        @endif
    </a>
</div>
