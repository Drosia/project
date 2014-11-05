    @extends ('projects.main')

    @section('containt')

<h1>Create a Project</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'projects')) }}

    <div class="form-group">
        {{ Form::label('projects', 'projects') }}
        {{ Form::text('projects', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the Project!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
    @stop