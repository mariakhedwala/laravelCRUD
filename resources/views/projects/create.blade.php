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
    <a href="/projects">back</a>
    <h1>Create a new project 🤔</h1>
    <?php 
        if($project->id) {
            $action = "/projects/$project->id"; 
            $method = 'PATCH';
            $valueTitle = $project->title;
            $valueDesc = $project->desc;
            $btn = "update";
        } else {
            $action ="/projects";
            $method = 'POST';
            $valueTitle = old('title');
            $valueDesc = old('desc');
            $btn = "create";
        }
    ?>
    <form action="<?php echo $action; ?>" method="POST">
        @method($method)
        @csrf
        <div>
            <input type="text" class="{{ $errors->has('title') ? 'warn' : '' }}" name="title" placeholder="project title" value="<?php echo $valueTitle ?>">
        </div>
        <div>
            <textarea name="desc" class="{{ $errors->has('desc') ? 'warn' : '' }}" placeholder="description"><?php echo $valueDesc ?></textarea>
        </div>
        <div>
            <button type="submit"><?php echo $btn; ?> project</button>
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