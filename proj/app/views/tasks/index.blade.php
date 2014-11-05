    @extends ('tasks.main')

    @section('containt')
<h1>All the tasks</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>tasks</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($tasks as $key => $value)
      @if ($iduser == $value->project_id)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->tasks }}</td>


            <td>

                {{ Form::open(array('url' => 'tasks/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Task', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <a class="btn btn-small btn-success" href="{{ URL::to('tasks/' . $value->id) }}">Show this Task</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('tasks/' . $value->id . '/edit') }}">Edit this Task</a>

            </td>
        </tr>
    @endif    
    @endforeach
    </tbody>
</table>

</div>
    @stop
