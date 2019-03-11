<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        .warn {
            border: 1px solid red;
        }
        </style>
</head>
<body>
    <h1>Create a new project</h1>
    <form action="/projects" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" class="{{ $errors->has('title') ? 'warn' : '' }}" name="title" placeholder="project title" value="{{ old('title') }}">
        </div>
        <div>
            <textarea name="desc" class="{{ $errors->has('desc') ? 'warn' : '' }}" placeholder="description"> {{ old('desc') }}</textarea>
        </div>
        <div>
            <button type="submit">create project</button>
        </div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</body>
</html>