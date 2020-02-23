<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
  
    <title>@yield('title', 'Voluntarios')</title>

    @push('style')
      <link href="/css/app.css" rel="stylesheet">
    @endpush
    
    @stack('style')

  </head>

  <body>

    @include('partials.navbar')

    <div class="container">
     @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      
      @yield('container')
    </div><!-- /.container -->

    @push('scripts')
      <script src="/js/jquery.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script>
        var laravel_token = '{{ csrf_token() }}';
      </script>
      <script src="/js/restfulizer.js"></script>
    @endpush
    
    @stack('scripts')
    
  </body>
</html>
