    @extends ('tasks.main')

    @section('containt')

<h1>Showing {{ $tasks->tasks }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $tasks->description }}</h2>
        
    </div>

</div>
    @stop