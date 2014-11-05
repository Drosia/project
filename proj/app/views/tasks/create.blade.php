    @extends ('tasks.main')

    @section('containt')

<h1>Create a Task</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'tasks/'.$session)) }}

    <div class="form-group">
        {{ Form::label('tasks', 'tasks') }}
        {{ Form::text('tasks', Input::old('name'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('description', 'description') }}
        {{ Form::text('description', Input::old('name'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Create the Task!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
    @stop