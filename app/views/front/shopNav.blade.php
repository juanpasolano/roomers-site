@section('shopNav')
<nav class="shopNavigation">
<!-- <form action="" class="searchForm">
	<input type="text" class="searchField" placeholder="Search...">
	<button type="submit" value="" class="btn btn-mini"><i class="icon-search"></i></button>
</form> -->
<span class="groupTitle">Categories</span>
<ul>
	@foreach ($categories as $category)
		<li><a href="{{URL::to('shop/category/'.$category->id)}}">{{$category->name}}</a></li>
	@endforeach
</ul>
<span class="groupTitle">Collections</span>
<ul>
	@foreach ($collections as $collection)
		<li><a href="{{URL::to('shop/collection/'.$collection->id)}}">{{$collection->name}}</a></li>
	@endforeach
</ul>
</nav>
@endsection