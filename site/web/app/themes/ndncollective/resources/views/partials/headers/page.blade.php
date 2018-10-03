@php $posts = get_posts() @endphp
@while(have_posts()) @php the_post() @endphp
  <section class="header" style="background: url('{{ the_post_thumbnail_url() }}'); background-size: cover; background-attachment: fixed; background-position: 50%;">
    <div class="overlay">  
      @include('partials.navs.nav')
      <div class="hero">
        <div class="hero-body has-text-centered">
          <div class="container">
            <h1 class="title">
              {{ the_title() }}
            </h1>
          </div>
        </div>
      </div>
      <div class="credit">
        {{ App::the_thumbnail_caption()  }}
      </div>
    </div>
  </section>
@endwhile