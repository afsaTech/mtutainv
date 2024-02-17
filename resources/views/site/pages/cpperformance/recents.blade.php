<div class="widget recent-posts">
  <h3 class="widget-title">Recent Posts</h3>
  <ul class="list-unstyled">
 @if(count($recents) > 0)
    @foreach($recents as $post)
      <li class="d-flex align-items-center">
        <div class="posts-thumb">
          <a href="{{ route('performance.show', $post->id) }}"><img loading="lazy" alt="img" src="{{ asset('storage/'.$post->image)}}"></a>
        </div>
        <div class="post-info">
          <h4 class="entry-title">
            {{ mb_strimwidth(ucfirst($post->title),0,62,'...') }}
          </h4>
        </div>
      </li><!--  post end-->
    @endforeach
  @else
    <li class="d-flex align-items-center">
      <div class="post-info">
        <span class="entry-title">No result found ...</span>
      </div>
    </div>
   @endif
  </ul>
</div>
