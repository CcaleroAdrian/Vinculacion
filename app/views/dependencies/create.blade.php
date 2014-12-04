@section('main')
{{Form::model(new Dependency,['route'=>['dependencies.store']]) }}
@include('dependencies/partials/_formulario',['submit_text'=>'Registrar dependencia'])
{{Form::close()}}
@stop 