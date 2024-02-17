<div class="widget">
  <h3 class="widget-title">Categories</h3>
  <ul class="arrow nav nav-tabs">
    @if(count($categories) > 0)
      @foreach($categories as $cat)
       <li><a href="#">{{ ucfirst($cat->name) }}</a></li>
      @endforeach
    @else
      <li class="text-default">No result found ...</li>
    @endif
  </ul>
</div>
