<div class="col-md-3 order-2 mb-5 mb-md-0">
  <div class="d-none d-sm-block">
    @include('includes.categories')
  </div>

  <div class="border p-4 rounded mb-4">
    <div class="mb-4">
      <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Component</h3>
    </div>

    <div class="mb-4">
      <h3 class="mb-3 h6 text-uppercase text-black d-block">Components</h3>
      
        @foreach($plans as $plan)
        <a href="{{route('tag', $plan->slug)}}" class="d-flex color-item align-items-center" >
        		<span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">{{$plan->name}}</span>
    	  </a>
        @endforeach
      
    </div>

  </div>
</div>