@if (isset($image))
  <section class="interlude" style="background: url('@asset($image)'); background-size: cover; background-position: 50% 50%; background-attachment: fixed;">
@else
  <section class="interlude" style="background: url('@asset('images/flower.png')'); background-size: cover; background-position: 50% 50%; background-attachment: fixed;">
@endisset
  <div class="interlude-bounds">
    <div class="poem">
      <h3>{{ $headline or '' }}</h3>
      <p>{{ $body or '' }}</p>
    </div>
  </div>
</section>