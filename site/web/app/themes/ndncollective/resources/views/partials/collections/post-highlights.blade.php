<section class="highlights">
  <div class="highlights-bounds">
    <div class="all-highlights">
      <div class="featured highlight-list">
        <img src="@asset('images/storycard_img-large.jpg')" />
        <h3><a href="/">Wireframe connects the underlying conceptual structure</a></h3>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmark-sgrove right at the coast of the Semantics, a large language ocean.</p>
        <a href="/"><button class="button read-more">Read more +</button></a>
      </div>
      <div class="highlight-list">
        <div class="columns">
          @include ( 'partials.entries.story', array ( 
              'headline' => 'An excellent post title that engages',
              'excerpt' => 'Far far away, behind the word mountains, far from the countries',
              'image' => 'images/storycard_img-small-1.jpg',
              'permalink' => '/stories',
          ) )
        </div>
        <div class="columns">
          @include ( 'partials.entries.story', array ( 
                'headline' => 'An excellent post title that engages',
                'excerpt' => 'Far far away, behind the word mountains, far from the countries',
                'image' => 'images/storycard_img-small-1.jpg',
                'permalink' => '/stories',
          ) )
        </div>
      </div>
    </div>
  </div>
</section>