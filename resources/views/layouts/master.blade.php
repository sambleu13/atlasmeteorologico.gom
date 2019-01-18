<!DOCTYPE html>
  <html lang="en">
    <head>

      @include('layouts.meta')

      @yield('title')

      @include('layouts.css')

      @yield('css')

    </head>

    <body>
      <header role="banner">
        <div class="container">
          @include('layouts.nav')
        </div>
      </header>

      <main role="main">
        <div class="container">
          @yield('content')
        </div>
      </main>
      <footer role="contentinfo">
        <div class="container">
          @include('layouts.footer')
        </div>
      </footer>

      @include('layouts.scripts')
     
      @section('scripts')
	<script language="JavaScript" >
 
	  var i = document.location.href.lastIndexOf("/");
	  var current = document.location.href.substr(i+1); 
     
	  $( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );  
	  if (current==''){
	    $("a[href*='/index']").closest('li.markt').addClass('active');
	  }
    
	  $('a[href*="' + current  + '"]').closest('li.markt').addClass('active'); 


	</script>
      @endsection
      
      @yield('scripts')

    </body>
</html>