@extends('cmsMaster')
@section('content')
	<h1>Customers</h1>


	<table class="table">
		<thead>
			<tr>
				<td>id</td>
				<td>Gender</td>
				<td>Last Name</td>
				<td>First Name</td>
				<td>Email</td>
				<td>Phone</td>
				<td>Orders</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($customers as $customer)
					<tr>
						<td>{{$customer->id}}</td>
						<td>{{$customer->gender}}</td>
						<td>{{$customer->lastname}}</td>
						<td>{{$customer->firstname}}</td>
						<td>{{$customer->email}}</td>
						<td>{{$customer->phone}}</td>

						<td><a href="{{ URL::to('/cms/customers/'.$customer->id.'/orders'); }}">{{$customer->orders->count()}}</a></td>
						<td><a href="{{ URL::to('/cms/customers/'.$customer->id); }}" class="btn btn-mini">Details</a></td>
					</tr>
		@endforeach
		</tbody>
	</table>



@stop