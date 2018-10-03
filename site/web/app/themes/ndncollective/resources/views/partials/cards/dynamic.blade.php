<div class="column">
  <div class="card">
    <a href="{{ the_permalink() }}">
      <div class="card-image" style="background: url('{!! the_post_thumbnail_url () !!}'); background-size: cover; background-position: 50% 50%;"></div>
    </a>
    <div class="card-content">
      <article @php post_class() @endphp>
        <header>
          @include('partials.meta.date-short')
          <h3 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
        </header>
        <div class="entry-summary">
          @php the_excerpt() @endphp
        </div>
      </article>
    </div>
    <div class="card-footer">
      <button class="read-more">
        <a href="{{ get_permalink() }}">{{ $button_text }} +</a>
      </button>
    </div>
  </div>
</div>
