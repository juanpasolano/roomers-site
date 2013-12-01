@extends('layouts.scaffold')

@section('main')

<h1>Show ProductImage</h1>

<p>{{ link_to_route('productImages.index', 'Return to all productImages') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Url</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
