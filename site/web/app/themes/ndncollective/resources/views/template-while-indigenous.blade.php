{{--
  Template Name: While Indigenous
--}}

@extends('layouts.app')

@section('content')
  <section class="podcast-header" style="background: url(@asset('images/podcast_bg-img.jpg')); background-size: cover; background-attachment: fixed; background-position: 50%;">
    <div class="hero">
      <div class="hero-body has-text-centered">
        <div class="container">
          <h1 class="title">
            <img src="@asset('images/while-indigenous.png')" />
          </h1>
          <h3 class="subtitle">
            An Independent Podcast
          </h3>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="columns is-center is-centered">
        @foreach ( App::podcasts ( -1, 0 ) as $podcast )
          @include ( 'partials.cards.podcast', array ( 
              'title' => $podcast['title'], 
              'episode' => $podcast['episode'], 
              'excerpt' => $podcast['excerpt'], 
              'permalink' => $podcast['permalink'] 
          ) )
        @endforeach
      </div>   
    </div>
  </section>
@endsection
