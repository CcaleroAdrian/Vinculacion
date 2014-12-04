<h1>REGISTRO</h1><br><br>
<h3>Grupos</h3><br><br>

<div>
	{{Form::label('carrera','Programa Educativo:')}}<br>
	{{Form::select('carrera',$program)}}<br><br>
</div>
<div>
	{{Form::label('nombre','Nombre:')}}<br>
	{{Form::select('nombre',array('nombre'=>'A','B','C','D','E','F','G'))}}<br><br>
</div>
<div>
	{{Form::label('cuatrimestre','Cuatrimestre:')}}<br>
	{{Form::select('cuatrimestre',array('cuatrimestre'=>'1° cuatrimestre','2° cuatrimestre','3° cuatrimestre','4° cuatrimestre','5° cuatrimestres'))}}<br><br>
</div>
<div>
	{{Form::label('alumnos','Numero de Alumnos:')}}<br>
	{{Form::selectRange('numero','8','50')}}
</div><br><br><br>
<div>
{{Form::submit('Guardar')}}
</div>