@section('main')
{{Form::model(new Group,['route'=>['Group.store']]) }}
@include('groups/partials/_formulario',['submit_text'=>'Registrar grupo'])
{{Form::close()}}
@stop 