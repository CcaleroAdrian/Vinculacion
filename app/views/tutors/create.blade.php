@section('main')
{{Form::model(new Tutor,['route'=>['Tutor.store']]) }}
@include('tutors/partials/_formulario',['submit_text'=>'Registrar tutor'])
{{Form::close()}}
@stop 