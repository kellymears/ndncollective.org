@while ( $get_most_recent_post->have_posts () ) @php $get_most_recent_post->the_post () @endphp
  <section class="header" style="background: url('{!! the_post_thumbnail_url () !!}'); background-attachment: fixed; background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="overlay">  
      @include('partials.navs.nav')
      <div class="hero">
        <div class="hero-body has-text-centered">
          <div class="container">
            @include('partials.meta.date')
            <h1 class="title">
              {{ the_title () }}
            </h1>
            <h2 class="subtitle">
              {{ get_the_excerpt () }}
            </h2>
            <a href="{!! the_permalink () !!}"><button>Continue Reading @svg ( 'simple-add' )</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endwhile