@extends ( 'layouts.app' )

@section ( 'intro' )
  @include ( 'partials.sections.intro' )
@endsection

@section ( 'pillars' )
  @include ( 'partials.collections.brand-pillars' )
@endsection

@section ( 'more' )
  @include ( 'partials.collections.recent-posts' )
@endsection

@section('content')
  @include ( 'partials.collections.recent-posts', array ( 'count' => 3, 'offset' => 1 ) )
@endsection

@section('podcast')
  @include ( 'partials.collections.podcast', array ( 'count' => 3, 'offset' => 0 ) )
@endsection

{{-- @section('highlights')
  @include ( 'partials.collections.post-highlights' )
@endsection --}}

@section('interlude')
  @include ( 'partials.sections.interlude', array ( 'headline' => 'Something Poetic to Break Things Up', 'body' => 'We are unapologetically, unabashedly, NDN. United like never before, we rise together—arm in arm—to equip all Indigenous Peoples with the tools needed to become architects of their future. Through a holistic approach to infrastructure, funding, advocacy, consulting, and philanthropy we are fostering a world of justice and equity for all people and the planet.' ) )
@endsection

{{--@section('panels')
  @include ( 'partials.sections.cta-panels' )
@endsection--}}