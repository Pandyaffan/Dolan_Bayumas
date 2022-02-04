<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('assets/img/jadi/logo1.png')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  </head>
<body id="home" class="scrollspy">

<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>

<div class="navbar-fixed">
<nav class="teal darken-3">
  <div class="container">
    <div class="nav-wrapper">
       <a href="#home" class="brand-logo">Dolan Banyumas</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
       <ul class="right hide-on-med-and-down">

        <li><a href="/">Beranda</a></li>
        <li><a href="{{route('login')}}">Login/Register</a></li>
       </ul>
    </div>
  </div>
</nav>
</div>


<!-- sidenav -->
<ul class="sidenav" id="mobile-nav">
  <li><a href="/">Beranda</a></li>
</ul>

@yield('content')

  <!-- footer -->

      <footer class="page-footer teal darken-4">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <h5 class="white-text center">Salam Traveller !</h5>
              <p class="grey-text text-lighten-4 center">Travel doesn't become adventure until you leave yourself behind.</p>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            © Copyright Proyek Perangkat Lunak By Pariwisata Banyumas
        </div>
      </footer>


  </body>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset('assets/js/materialize.min.js')}}"></script>
    <script>
      const sideNav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sideNav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider,{
        indicators: false,
        transition:600,
        interval:3000
      });
      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);

      const scroll = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll, {
        scrollOffset: 50
      })
</script>
</body>
</html>