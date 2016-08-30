<!DOCTYPE html>
<html lang="fr">
  
  @include('partials._head')

  <body>

    @include('partials._nav')

    <div class="container">
      
      @include('partials._messages')

      <div id="content">
        @yield('content')
      </div>

      @include('partials._footer')

    </div> <!-- .end of container -->

    @include('partials._javascript')

    @yield('scripts')
  
  </body>
</html>