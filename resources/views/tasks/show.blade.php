<div>
    <form action="{{ route('tasks.index') }}" method="get">
        <button>Back</button>
    </form>

    <x-task-details :task="$task" />

{{--    <form action="{{ route('tasks.index') }}" method="post">--}}
{{--        @method("patch")--}}
{{--        <button>Edit</button>--}}
{{--    </form>--}}

{{--    <form action="{{ route('tasks.index') }}" method="get">--}}
{{--        <button>Delete</button>--}}
{{--    </form>--}}
</div>
