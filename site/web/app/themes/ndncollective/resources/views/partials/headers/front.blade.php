@php $posts = get_posts() @endphp
@while(have_posts()) @php the_post() @endphp
<section class="header" style="background: url('{{ the_post_thumbnail_url() }}'); background-size: cover; background-attachment: fixed; background-position: 20% 90%;">
  <div class="overlay">  
    @include('partials.navs.nav')
    <div class="hero">
      <div class="hero-body has-text-centered">
        <div class="container">
          <h1 class="title">
            Defend. Develop. Decolonize.
          </h1>
          <h2 class="subtitle">
            NDN Collective is a national organization dedicated to building Indigenous power
          </h2>
        </div>
      </div>
    </div>
  </div>
</section>
@endwhile
