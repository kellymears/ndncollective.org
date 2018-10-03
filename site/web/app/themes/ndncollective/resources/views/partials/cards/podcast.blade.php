<div class="episode">
  <div class="card">
    <div class="card-content">
      <span>Episode #{!! $episode !!}</span>
      <h3><a href="{!! $permalink !!}">{!! $title !!}</a></h3>
      <img src="@asset('images/svg/paint.svg')" />
      <p>{!! $excerpt !!}</p>
      <a href="{!! $permalink !!}"><button class="strong-button">Play the episode</button></a>
    </div>
  </div>
</div>