@extends ( 'layouts.app' )

@section ( 'content' )
  @while ( have_posts () ) @php the_post () @endphp
    @include ( 'partials.content.single' )
  @endwhile
@endsection

@section ( 'podcast' )
  @include ( 'partials.collections.podcast', array ( 'offset' => 0, 'count' => -1 ) )
@endsection
