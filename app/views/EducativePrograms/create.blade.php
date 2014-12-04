@section('main')
{{Form::model(new EducativeProgram,['route'=>['EducativePrograms.store']]) }}
@include('EducativePrograms/partials/_formularioEducative',['submit_text'=>'Registrar Programa Educativo'])
{{Form::close()}}
@stop