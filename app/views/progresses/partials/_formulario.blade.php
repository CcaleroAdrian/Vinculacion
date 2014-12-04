<h1>REGISTRO</h1><br>
<h3>Avances del Servicio Social</h3>

<div>
	{{Form::label('nombre','Nombre del Programa:')}}<br>
	{{Form::text('nombre',null)}}<br><br>
</div>
<div>
	{{Form::label('objetivo','Objetivo del Programa:')}}<br>
	{{Form::text('objetivo',null,array('placeholder'=>''))}}<br><br>
</div>
<div>
	{{Form::label('asignacion','Área de asignación:')}}<br>
	{{Form::text('asignación',null)}}<br><br>
</div>
<div>
	{{Form::label('fecha_inicio','Fecha de Inicio:')}}<br>
	{{Form::text('fecha_inicio',null,array('placeholder'=>'Formato de fecha:dd/mm/aaaa'))}}<br><br>
</div>
<div>
	{{Form::label('fecha_termino','Fecha de Termino:')}}<br>
	{{Form::text('fecha_termino',null,array('placeholder'=>'Formato de fecha:dd/mm/aaaa'))}}<br><br>
</div>
<div>
	{{Form::label('asesor_externo','Asesor Externo:')}}<br>
	{{Form::text('asesor_externo',null)}}<br><br>
</div>
<div>
	{{Form::label('asesor_interno','Asesor Interno:')}}<br>
	{{Form::text('asesor_interno',null)}}<br><br><br><br>
</div>
<div>
{{Form::submit('Guardar')}}
</div>
