<section class="recent">
  <div class="container">
    <div class="columns">
      @while ( $get_recent_posts->have_posts () ) @php $get_recent_posts->the_post () @endphp
        @include ( 'partials.cards.card' )
      @endwhile
      {!! get_the_posts_navigation() !!}
    </div>
  </div>
</section>