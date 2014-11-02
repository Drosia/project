    @extends ('projects.main')

    @section('containt')

<h1>Edit {{ $projects->projects }}</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model($projects, array('route' => array('projects.update', $projects->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('projects', 'Projects') }}
        {{ Form::text('projects', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Project!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
    @stop

