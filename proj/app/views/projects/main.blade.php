<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('projects') }}">Project</a>
    </div>
    <ul class="nav navbar-nav">

        <li><a href="{{ URL::to('projects/create') }}">Create a Project</a></li>
        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
    </ul>
</nav>
@yield('containt')

</body>
</html>
