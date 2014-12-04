@section('main')
{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1><br><br><br>
		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('num_control') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('num_control', 'Número de Control') }}<br>
			{{ Form::text('num_control', null,array('autofocuss')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}<br>
			{{ Form::password('password', array('placeholder' => 'minimo 8 caracteres')) }}
			<br><br><label>
				{{HTML::linkAction('StudentsController@create','REGISTRATE')}} 
			</label>
			
		</p>
		<p>
			<lable>
			{{Form::checkbox('rememberme',true) }} No cerrar sesión
			</lable>
		</p>
		<br><br>
		<p>{{ Form::submit('Aceptar') }}</p>
	{{ Form::close() }}
@stop
