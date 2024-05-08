<!-- resources/views/backlogs/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backlogs List</title>
</head>
<body>
    <h1>Backlogs List</h1>
    <ul>
        @foreach($backlogs as $backlog)
            <li>
                {{ $backlog->description }} - Due Date: {{ $backlog->date }}
                <form action="{{ route('backlogs.destroy', $backlog->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('backlogs.create') }}">Create New Backlog</a>
</body>
</html>
