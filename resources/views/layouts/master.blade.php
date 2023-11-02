<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome-6-pro-main/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">

</head>

<body>

    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <div class="sidebar-header">
                    <div class="sidebar-brand" >
                        <a href="#"style="text-decoration: none; color:rgb(45, 179, 241); font-weight:650;">Pra UjiSkema</a>
                    </div>
                </div>
                <li><a href="/">Home</a></li>
                <li><a href="/data-supplier">Data Supplier</a></li>
                <li><a href="/data-barang">Data Barang</a></li>
                <li><a href="/barang-terkirim">Data barang terkirim</a></li>
                {{-- <li><a href="#team">Team</a></li>
                <li class="dropdown">
                    <a href="#works" class="dropdown-toggle" data-bs-toggle="collapse">Works <span
                            class="caret"></span></a>
                    <div class="collapse" id="works">
                        <ul class="animated fadeInLeft" role="menu">
                            <div class="">Dropdown heading</div>
                            <li><a href="#pictures">Pictures</a></li>
                            <li><a href="#videos">Videeos</a></li>
                            <li><a href="#books">Books</a></li>
                            <li><a href="#art">Art</a></li>
                            <li><a href="#awards">Awards</a></li>
                        </ul>
                    </div>

                </li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#followme">Follow me</a></li> --}}
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-lg-offset-2">
                        @yield('container')
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    {{-- script --}}
    <script src="{{ asset('vendor/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/master.js') }}"></script>
    @yield('script')
 <script>
    $(function () {
        $("[rel='tooltip']").tooltip();
    });
 </script>


</body>

</html>
