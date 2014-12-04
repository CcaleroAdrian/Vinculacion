@section('main')
{{Form::model(new Student,['route'=>['student.store']]) }}
@include('students/partials/_formulario',['submit_text'=>'Registrar Alumno'])
{{Form::close()}}
@stop