<div>
    My tasks
</div>
<a href="{{ route('tasks.create') }}">Add new tasks</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Completed</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->name }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->compaleted }}</td>
            <td>
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                    @csrf
                    <button type="submit">edit</button>
                </form>
           
            <form action="{{ route('tasks.delete', $task->id) }}" method="POST">
                    @csrf
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>