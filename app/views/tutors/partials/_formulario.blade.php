<h1>REGISTRO</h1><br>
<h3>Tutores</h3>

<div>
	{{Form::label('nombre','Nombre:')}}<br>
	{{Form::text('nombre',null,array('autofocus'))}}<br><br>
</div>
<div>
	{{Form::label('area','Área laboral:')}}<br>
	{{Form::text('area',null,array('placeholder'=>'carrera'))}}<br><br>
</div>
<div>
{{Form::submit('Guardar')}}
</div>
