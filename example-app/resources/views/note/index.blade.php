<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <h1>Notas</h1>
    <ul>
    @foreach ($notes as $note)
        <li>{{ $note->title }} -- {{ $note->description }}</li>
    @endforeach
    </ul>
</body>
</html>