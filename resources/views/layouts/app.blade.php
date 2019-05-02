<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TODO List</title>
    <link rel="stylesheet" href={{ asset('css/app.css')}}>
</head>
<body style="background:linear-gradient(135deg, #0079BF, #5067C5)">
    @include('inc.navebar')
    <main role="main" class="container">
      <div class="row">
                <div class="col-md-12 col-lg-12">
                  @if(Request::is('/'))
                    @include('inc.welcomemsg')
                  @endif
                  @yield('content')
                </div>
            </div>
    </main>
    <footer id="footer" class="text-center">
        <P>Copyright 2019 &copy; AshrafWebsite</P>
    </footer>
</body>
</html>
