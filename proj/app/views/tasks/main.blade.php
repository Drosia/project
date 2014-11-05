<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('tasks/'.$session.'/proj') }}">Task</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('projects') }}">Back to Projects</a></li>
        <li><a href="{{ URL::to('tasks/create/'. $session ) }}">Create a Task</a></li>
        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
    </ul>
</nav>
@yield('containt')

</body>
</html>
