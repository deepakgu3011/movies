<!doctype html>
<html lang="en">

<head>
    <title>fimliduniya</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="google-site-verification" content="r3Bdu0Td_e-yJ7g8HQidTiVYt2aM_OVVJtwTRviXBfY" />
    <meta name="keywords" content="movies,latest movies,websersies ,bhojpuri movies">


    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script type="text/javascript" src="{{asset('app.js')}}"></script>
    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="dns-prefetch" href="//tdmovies.rf.gd">    
  <link rel="preconnect" href="https://tdmovies.rf.gd/public/">



</head>

<body>
    <header>
        <nav id="nav">
            <a href="{{ url('/') }}"><img src="{{ asset('favicon.ico') }}" alt="Logo" id="icon"></a>
            <ul id="navs">
                <li><a href="{{ url('aboutus ') }}">About Us</a></li>
                <li><a href="{{ url('contact ') }}">Contact Us</a></li>
                <li><form action="{{ url('/') }}" method="get"  id="search">
            <input type="text" name="name" placeholder="Search" id="ser">
            &nbsp;&nbsp;<button type="submit" style="border-radius: 5%;"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
            &nbsp;&nbsp;<a href="{{ url('/') }}" class="btn btn-info" style="text-decoration: none; color: white;" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'">Clear Search</a>
        </form></li>
            </ul>
           <i class="fa-solid fa-bars" style="color: #f0f2f4;" id="menu" onclick="show()"></i>
           <i class="fa-solid fa-xmark" style="color: #fafcff;" id="hide" onclick="hide()"></i>
        </nav>
<p class="text-primary">Current Time: {{ now()->format('d-M-y') }}</p>
    </header>
    <main>
      

<div class="container border-info p-4">
    <ul class="list-unstyled">
        <li class="mb-3">
            <i class="fa-solid fa-caret-right"></i> 
            <a href="{{url('/')}}" class="text-decoration-none text-dark">Home</a>
        </li>
        <li class="mb-3">
            <i class="fa-solid fa-caret-right"></i> 
            <a href="{{url('aboutus')}}" class="text-decoration-none text-dark">About Us</a>
            <ul class="list-unstyled ms-4 mt-2">
                <li><a href="#" class="text-decoration-none text-muted">Our Mission</a></li>
                <li><a href="#" class="text-decoration-none text-muted">Why Choose Us?</a></li>
                <li><a href="#" class="text-decoration-none text-muted">Follow Us</a></li>
            </ul>
        </li>
        <li class="mb-3">
            <i class="fa-solid fa-caret-right"></i> 
            <a href="{{url('contact')}}" class="text-decoration-none text-dark">Contact Us</a>
            <ul class="list-unstyled ms-4 mt-2">
                <li><a href="#" class="text-decoration-none text-muted">Send Us a Message</a></li>
            </ul>
        </li>
        <li>
            <i class="fa-solid fa-caret-right"></i> 
            <a href="{{url('policy')}}" class="text-decoration-none text-dark">Privacy Policy</a>
            <ul class="list-unstyled ms-4 mt-2">
                <li><a href="#" class="text-decoration-none text-muted">Policy for Children</a></li>
            </ul>
        </li>
    </ul>
</div>
    </main>
<footer><div class="footer-content">
    <p>&copy; 2024 FilmiDuniya. All rights reserved.</p>
    <ul class="footer-links">
        <li><a href="{{ url('policy') }}">Privacy Policy</a></li>
        <li><a href="{{ url('contact') }}">Contact Us</a></li>
        <li><a href="{{url('sitemap')}}">Sitemap</a></li>
        <li><p class="text-info">Last Update: {{ \Carbon\Carbon::yesterday()->format('Y-M-d') }}</p>
        </li>
    </ul>
  </div>
  <div class="text-right"><p class="text-end text-danger" >* This Site is build for only educational Purpose</p></div>
  </footer>

<!-- Bootstrap JavaScript Libraries -->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
></script>
    <script src="{{ asset('app.js') }}"></script>
<script type="text/javascript" src="https://udbaa.com/slider.php?section=General&pub=621864&ga=g&side=random"></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"
></script>
</body>
</html>

