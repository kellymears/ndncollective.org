<section class="section post-content">
 <div class="container">
    <div class="columns">
      <article @php post_class() @endphp>
        <div class="entry-content">
          {{ the_content() }}
        </div>
        <footer>
          {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        </footer>
      </article>
    </div>
  </div>
</section>
