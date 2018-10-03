@php $posts = get_posts() @endphp
@while(have_posts()) @php the_post() @endphp
  <div class="reading-progress"></div>
  <section class="header" style="background: url('{{ the_post_thumbnail_url() }}'); background-size: cover; background-position: 50%;">
    <div class="overlay">  
      @include('partials.navs.nav')
      <div class="hero">
        <div class="hero-body has-text-centered">
          <div class="container">
            @include('partials.meta.date')
            <h1 class="title">
              {{ the_title() }}
            </h1>
            <h2 class="subtitle">
              {{ strip_tags(get_the_excerpt()) }}
            </h2>
          </div>
        </div>
      </div>
      <div class="credit">
        {{ App::the_thumbnail_caption()  }}
      </div>
    </div>
  </section>
@endwhile