 <div class="border p-4 rounded mb-4">
    <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3><ul class="list-unstyled mb-0">
		@foreach($categories as $category)
	  <li class="mb-1"><a href="{{route('category' , $category->slug)}}" class="d-flex"><span>{{$category->name}}</span> <span class="text-black ml-auto">({{ $category->posts->count() }})</span></a></li>
	  @endforeach
	</ul>
</div>