@section('content')
<a href="{{ route('users.create')}}" class="btn btn-info">Create new user</a>
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Phone</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
							<tr>
								<td>{{$user->name}}</td>
								<td>{{$user->address}}</td>
								<td>{{$user->phone}}</td>
								<td>
									<a class="btn btn-small" href="/users/{{$user->id}}">Details</a>
									<a class="btn btn-small btn-danger" href="{{ route('users.destroy', ['users' => $user->id])}}">Delete</a>
								</td>
							</tr>
				@endforeach
			</tbody>
		</table>
@endsection