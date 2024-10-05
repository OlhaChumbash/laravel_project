<div>
    <h1>Edit Task</h1>
    {{-- Форма обновления таска --}}
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PUT') {{-- Указываем метод PUT для обновления задачи --}}
        
        <label>Name
            <input type="text" name="name" value="{{ $task->name }}">
        </label><br/>

        <label>Description
            <input type="text" name="description" value="{{ $task->description }}">
        </label><br/>

        <button type="submit">Update</button>
    </form>
</div>
