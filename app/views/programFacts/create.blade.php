@section('main')
{{Form::model(new ProgramFact,['route'=>['ProgramFact.store']]) }}
@include('programFacts/partials/_formulario',['submit_text'=>'Registrar Programa'])
{{Form::close()}}
@stop 