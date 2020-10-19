<nav class="navbar fixed-top navbar-expand-xl">
    <div class="container">
        <a class="navbar-brand mobile-logo" href="#"><img src="{{asset('Main/images/logo.png')}}" alt="Vista Pro"/></a>
        <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
            <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></button>

        <div id="my-nav" class="collapse navbar-collapse">

            <div>
                <p class="text-left follow">Follow Us:</p>
                <ul class="navbar-nav float-left social-links">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/fh5co"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-pinterest-p"></i></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://twitter.com/fh5co"><i
                                    class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                    </li>

                </ul>
            </div>



            <ul class="navbar-nav float-right menu-links">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news">News</a>
                </li>

            </ul>

            <ul class="navbar-nav mx-auto logo-desktop">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><img src="{{asset('Main/images/logo.png')}}" alt="Vista Pro"/></a>
                </li>
            </ul>
        </div>
    </div>
</nav>