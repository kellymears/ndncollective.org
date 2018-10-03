@extends('layouts.app')

@section ( 'content' )
  @posts
    @include ( 'partials.content.page' )
  @endposts
@endsection

@section ( 'intro' )
  @include ( 'partials.sections.intro' )
@endsection

@section('more')
  @include ( 'partials.collections.recent-posts', array ( 'count' => 3, 'offset' => 0 ) )
@endsection

@section('podcast')
  @include ( 'partials.collections.podcast', array ('count' => 3, 'offset' => 0) )
@endsection