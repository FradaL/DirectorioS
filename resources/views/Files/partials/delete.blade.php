
<style type="">
.clase{
	display:inline-block;
}
</style>
{!! Form::open (['route' => ['delete.file', $list], 'method' => 'DELETE', 'class' => 'clase']) !!}

<button type="submit" class="btn btn-danger">Eliminar</button>

{!! Form::close() !!}


