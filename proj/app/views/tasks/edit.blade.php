    @extends ('tasks.main')

    @section('containt')

<h1>Edit {{ $tasks->tasks }}</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model($tasks, array('route' => array('tasks.update', $tasks->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('tasks', 'tasks') }}
        {{ Form::text('tasks', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('description', 'description') }}
        {{ Form::text('description', null, array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the Project!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
    @stop

