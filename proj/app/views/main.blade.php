<!DOCTYPE html>
<html>
<head>
    <title>Login To Projects</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>    
<div class="container"style="margin: 0 auto; width: 400px;">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
    <p align="center">    <a  class="navbar-brand" href="{{ URL::to('login') }}">Login</a> </p>
    </div>

</nav>
@yield('containt')

</body>
</html>
