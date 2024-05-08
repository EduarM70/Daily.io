<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Backlog</title>
</head>
<body>
    <h1>Create Backlog</h1>
    <form action="{{ route('backlogs.store') }}" method="POST">
        @csrf
        <label for="project_id">Project ID:</label><br>
        <input type="text" id="project_id" name="project_id"><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>
        
        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date"><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>


