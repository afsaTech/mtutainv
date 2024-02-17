<div class="widget">
  <h3 class="widget-title">Filter By Date</h3>
  <ul class="arrow nav nav-tabs">
    @if(count($allAchieves) > 0)
      @foreach($allAchieves as $achieve)
        <li><a href="{{ route('performance.show', $achieve->id) }}">{{ date('M Y', strtotime($achieve->date)) }}</a></li>
      @endforeach
    @else
      <li class="text-default">No result found ...</li>
    @endif
  </ul>
</div>
