    @extends ('main')

    @section('containt')

	{{ Form::open(array('url' => 'login')) }}
	<table style="width:100%">
	<tr>



			{{ $errors->first('email') }}
			{{ $errors->first('password') }}


	<p align="center">
			{{ Form::label('email', 'Enter mail ') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
		</p>
</tr>
<tr>

	<p align="center">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>
</tr>
<tr>

		<p align="center">	{{ Form::submit('Log in', array('class' => 'class="navbar navbar-inverse"')) }}</p>

</tr>

</table>
			{{ Form::close() }}
</div></div>
    @stop
