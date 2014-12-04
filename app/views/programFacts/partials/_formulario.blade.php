<h1>REGISTRO</h1><br>
<h3>Datos del Programa</h3>

<div>
	{{Form::label('descripcion','Descripción:')}}<br>
	{{Form::text('descripcion',null,array('placeholder'=>'Titulo del Documento Entregado'))}}
	{{Form::select('descripcion',$documents))}}
	<br><br>
</div>
<div>
	{{Form::label('fecha','Fecha de Entrega:')}}<br>
	{{Form::text('fecha',null,array('placeholder'=>'Formato de Fecha:dd/mm/aaaa'))}}<br><br>
</div>
<div>
{{Form::submit('Guardar')}}
</div>
