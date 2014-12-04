@section('main')
{{Form::model(new Progress,['route'=>['Progress.store']]) }}
@include('progresses/partials/_formulario',['submit_text'=>'Registrar avances'])
{{Form::close()}}
@stop 