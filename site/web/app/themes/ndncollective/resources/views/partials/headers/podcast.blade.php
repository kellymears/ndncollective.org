@php $posts = get_posts() @endphp
@while(have_posts()) @php the_post() @endphp
  <section class="podcast-header" style="background: url(@asset('images/podcast_bg-img.jpg')); background-size: cover; background-attachment: fixed; background-position: 50%;">
      <div class="hero">
        <div class="hero-body has-text-centered">
          <div class="container">
            <h1 class="title">
              <img src="@asset('images/while-indigenous.png')" />
            </h1>
            <h2 class="subtitle">
              An original podcast by NDN Collective.
            </h2>
          </div>
        </div>
      </div>
  </section>
@endwhile