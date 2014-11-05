    @extends ('projects.main')

    @section('containt')
<h1>All the Projects</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>projects</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($projects as $key => $value)
      @if ($iduser == $value->User_id)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->projects }}</td>


            <td>

                {{ Form::open(array('url' => 'projects/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Project', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <a class="btn btn-small btn-success" href="{{ URL::to('projects/' . $value->id) }}">Show this Project</a>

                <a class="btn btn-small btn-success" href="{{ URL::to('projects/' . $value->id . '/edit') }}">Edit this Project</a>
                <a class="btn btn-small btn-info" href="{{ 'tasks/create/'. $value->id }}">Create Tasks</a>

                <?php $check = 'no'; ?>
     @foreach($tasks as $key => $data)    
     @if ($data->project_id == $value->id)
               <?php $check = 'yes'; ?>                
    @endif   
    @endforeach

    @if ($check=='yes')
    <a class="btn btn-small btn-info" href="{{ URL::to('tasks/' . $value->id).'/proj' }}">Show Tasks</a>

    @endif
            </td>
        </tr>
    @endif    
    @endforeach
            </tbody>
        </table>

        </div>
          @stop
