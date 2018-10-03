@extends('layouts.app')

@section('intro')
<section class="intro">
  <div class="intro-bounds">
    <div class="columns">
      <div class="image">
        <img src="@asset('images/svg/NDN_logo_fullcolor.svg')" alt="{{ App::siteName() }}">
      </div>
      <div class="text">
        <h2>Defend. Develop. Decolonize.</h2>
        <p>We are unapologetically, unabashedly, NDN. United like never before, we rise together—arm in arm—to equip all Indigenous Peoples with the tools needed to become architects of their future. Through a holistic approach to infrastructure, funding, advocacy, consulting, and philanthropy we are fostering a world of justice and equity for all people and the planet.</p>
        <button>Button</button>
      </div>
    </div>
  </div>
</section>
@endsection

{{-- 
@section('content')
<section class="recent">
  <div class="container">
    <div class="columns">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
      @endif
      @while (have_posts()) @php the_post() @endphp
        @include('partials.content.single')
      @endwhile
      {!! get_the_posts_navigation() !!}
    </div>
  </div>
</section>
@endsection
--}}

@section ( 'more' )
  @include ( 'partials.collections.recent-posts', array ( 'count' => 3, 'offset' => 0 ) )
@endsection

@section('panels')
<section class="panels">
  <div class="panels-bounds">
    <div class="pairing">
      <div class="call-to-action">
        <h3 class="panel-title">Subscribe</h3>
        <span>Get the best of NDN in your inbox</span>
        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it.</p>
        <div class="columns is-gapless">
          <div class="column is-four-fifths">
            <div class="field has-addons has-addons-centered">
              <div class="control">
                <input class="input" type="text" placeholder="Email">
              </div>
              <div class="control">
                <a class="button submit">
                  Subscribe
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="teaser">
        <h3 class="panel-title">Absolutely Fascinating</h3>
        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove</p>
        <a href="/">
          <button class="button read-more" href="/">Read more +</button>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection