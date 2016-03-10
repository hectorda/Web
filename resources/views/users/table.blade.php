<table class="table table-hover">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Rut</th>
			<th>Email</th>
			<th>Creado</th>
			<th>Imagen</th>
			<th>Pass</th>
			<th width="120px">Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
			<tr>
				<td>{{$user->first_name}}</td>
				<td>{{$user->last_name}}</td>
				<td>{{$user->rut}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->created_at}}</td>
				<td>{{$user->imagen}}</td>
				<td>{{$user->password}}</td>
			  <td>
			  	<a href="{{ route('users.show', [$user->id]) }}"><i class="fa fa-eye"></i></a>
                <a href="{{ route('users.edit', [$user->id]) }}"><i class="fa fa-edit"></i></a>
                <a href="{{ route('users.delete', [$user->id]) }}" onclick="return confirm('Estas seguro que deseas eliminar este usuario?')"><i class="fa fa-trash"></i></a>
            </td>
			</tr>
		@endforeach		
	</tbody>
</table>