<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New project</title>
</head>

<body>
    <h2>Create a project</h2>
    <br>
    <form action="/projects" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>
        <div>
            <textarea name="description" placeholder="project description"></textarea>
        </div>
        <div>
            <button type="submit">Create project</button>
        </div>
    </form>
</body>

</html>
