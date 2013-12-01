
@section('main')

<h1>All ProductImages</h1>



@if ($productImages->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Url</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($productImages as $productImage)
				<tr>
					<td>{{{ $productImage->name }}}</td>
					<td>{{{ $productImage->url }}}</td>
                    <td>{{ link_to_route('productImages.edit', 'Edit', array($productImage->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('productImages.destroy', $productImage->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no productImages
@endif

@stop
