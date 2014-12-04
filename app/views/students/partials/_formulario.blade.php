<h1>REGISTRO</h1><br>
<h3>Alumnos</h3><br><br><br>

<div>
	{{Form::label('nombre','Nombre:')}}<br>
	{{Form::text('nombre',null,array('autofocus'))}}<br><br>
</div>
<div>
	{{Form::label('apellidos','Apellidos:')}}<br>
	{{Form::text('apellidos',null)}}<br><br>
</div>
<div>
	{{Form::label('numero','Numero de Control:')}}<br>
	{{Form::text('numero',null)}}<br><br>
</div>
<div>
	{{ Form::label('password', 'Password')}}<br>
	{{ Form::password('password') }}<br><br>
</div>
<div>
	{{Form::label('fecha','Fecha de Nacimiento:')}}<br>
	{{Form::text('fecha',null,array('Formato de fecha:aa/mm/dd'))}}<br><br>
</div>
<div>
	{{Form::label('sexo','Sexo:')}}<br>
	{{ Form::radio('sexo', 'M') }}{{Form::label('Masculino')}}<br>
	{{ Form::radio('sexo', 'F') }}{{Form::label('Femenino')}}<br><br>
</div>
<div>
	{{Form::label('domicilio','Domicilio:')}}<br>
	{{Form::text('domicilio',null,array('placeholder'=>'Calle,Número,Colonia'))}}<br><br>
</div>
<div>
	{{Form::label('ciudad','Ciudad:')}}<br>
	{{Form::text('ciudad',null)}}<br><br>
</div>
<div>
	{{Form::label('estado','Estado:')}}<br>
	{{Form::text('estado',null)}}<br><br>
</div>
<div>
	{{Form::label('cp','Cp:')}}<br>
	{{Form::text('cp',null)}}<br><br>
</div>
<div>
	{{Form::label('telefono','Telefono:')}}<br>
	{{Form::text('telefono',null)}}<br><br>
</div>
<div>
	{{Form::label('grupo','Grupo:')}}<br>
	{{Form::select('grupo',$groups)}}<br><br>
</div>
<div>
	{{Form::label('cuatrimestre','Cuatrimestre:')}}<br>

	{{Form::select('cuatrimestre',array(''))}} <br><br>
</div>
<div>
	{{Form::label('beca','Beca:')}}<br>
	{{Form::text('beca',null)}}<br><br>
</div>
<div>
{{Form::submit('Guardar')}}
</div> 
