<div class="column">
  <img src="@asset($image)" />
  @include ( 'partials.meta.date-short' )
  <h3><a href="{!! $permalink !!}">{!! $headline !!}</a></h3>
  <p>{!! $excerpt !!}</p>
</div>