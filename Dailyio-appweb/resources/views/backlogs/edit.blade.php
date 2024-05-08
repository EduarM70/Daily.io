<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Backlog</title>
</head>
<body>
    <h1>Edit Backlog</h1>
    <form action="{{ route('backlogs.update', $backlog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="project_id">Project ID:</label><br>
        <input type="text" id="project_id" name="project_id" value="{{ $backlog->project_id }}"><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ $backlog->description }}</textarea><br>
        
        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date" value="{{ $backlog->date }}"><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>

