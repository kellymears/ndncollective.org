<section class="podcast" style="background: url('@asset('images/podcast_bg-img.jpg')'); background-size: cover;">
  <div class="bounds podcast-bounds">
    <div class="subscribe">
      <div class="call-to-action">
        <div class="content">
          <div class="card">
            <div class="card-content">
              <h2><img src="@asset('images/while-indigenous.png')" alt="While Indigenous" /></h2>
              <img src="@asset('images/svg/paint.svg')" />
              <p>&ldquo;While Indigenous&rdquo; is an NDN Collective original Podcast, hosted by Sarah Manning.</p>
              <button>Subscribe</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="listen">
      @foreach ( App::podcasts ( $count, $offset ) as $podcast )
        <div class="episode">
          <div class="card">
            <div class="card-content">
              <span>Episode #{!! $podcast['episode'] !!}</span>
              <h3><a href="{!! $podcast['permalink'] !!}">{!! $podcast['title'] !!}</a></h3>
              <img src="@asset('images/svg/paint.svg')" />
              <p>{!! $podcast['excerpt'] !!}</p>
              <a href="{!! $podcast['permalink'] !!}"><button>Play the episode</button></a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>