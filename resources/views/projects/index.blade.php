<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <p>
                    <span>{{ $project->id }}</span>
                    <a href="/projects/{{ $project->id }}">{{ $project -> title }}</a>
                </p>
                <form action="/projects/{{ $project->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <div>
                        <button type="submit">delete project</button>
                    </div>
                </form>
            </li>
        @endforeach
    </ul>
    <p>
        <a href="/projects/create">create new</a>
    </p>
</body>
</html>