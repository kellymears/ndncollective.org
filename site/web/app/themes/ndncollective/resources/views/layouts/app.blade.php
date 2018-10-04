<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp

    @if ( is_front_page() )
      @include('partials.headers.front')

    @elseif ( is_page ( 'while-indigenous' ) )
      @include ('partials.navs.navbar')

    @elseif ( is_page () )
      @include('partials.headers.page')

    @elseif ( is_single() )
      @include('partials.headers.single')
      
    @elseif ( is_home() )
      @include('partials.headers.recent-post' )

    @endif

    <main>
      @if (is_front_page () )
        @yield ('intro')
        @yield ('pillars')
        @yield ('content')
        @yield ('podcast')
        @yield ('highlights')
        @yield ('interlude')
        @yield ('panels')

      @elseif ( is_home () )
        @yield ( 'intro' )
        @yield ( 'more' )

      @elseif ( is_page ( 'while-indigenous' ) )
        @yield ( 'content' )
        @yield ( 'more' )
      
      @elseif ( is_page ( 'stories' ) )
        @yield ( 'content' )
        @yield ( 'more' )
        @include ( 'partials.sections.intro' )
        @yield ( 'podcast' )

      @elseif  ( is_page () )
        @yield ( 'content' )
        @include ( 'partials.sections.intro' )
        @yield ( 'more' )
        @yield ( 'podcast' )

      @elseif ( is_single () )
        @yield ( 'content' )
        @include ( 'partials.sections.intro' )
        @yield ( 'more' )
        @yield ( 'podcast' )

      @endif
    </main>
    @php do_action('get_footer') @endphp
    @include('partials.footers.footer') 
    @php wp_footer() @endphp
  </body>
</html>
