<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="dist/css/bulma.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="dist/js/script.js"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar is-fixed-top is-link" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <div class="navbar-item image is-64x64">
                    <img src="dist/img/brand.png" alt="" class="is-rounded">
                    <span class="brand-asep">AsepSae</span>
                </div>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div class="navbar-menu" id="navMenu">
                <div class="navbar-end">
                    <a class="navbar-item">
                        Home
                    </a>
                    <a class="navbar-item">
                        About
                    </a>
                    <a class="navbar-item">
                        Services
                    </a>
                    <a class="navbar-item">
                        Portfolio
                    </a>
                    <a class="navbar-item">
                        Contact
                    </a>
                    <a class="navbar-item">
                        Blog
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Hero -->
    <section class="hero is-link is-fullheight-with-navbar">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="subtitle is-1">Hello,</h1>
                <h2 class="title is-2">I'M Asep Saepudin</h2>
                <p class="subtitle">
                    Junior Web Developer
                </p>
                <button class="button is-light is-outlined">Contact Me</button>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#485fc7" fill-opacity="1" d="M0,256L120,218.7C240,181,480,107,720,101.3C960,96,1200,160,1320,192L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>
    <!-- End Hero -->


    <!-- About -->
    <section class="container about section">
        <div class="columns">
            <div class="column image is-128x128">
                <img src="dist/img/about.png" alt="">
            </div>
            <div class="column">
                <h1 class="subtitle brand-asep">About Me</h1>
                <progress class="progress is-link" value="25" max="100">15%</progress>
                <h1 class="title">I Am a Junior Web Developer And UI/UX Developer</h1>
                <p class="block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea iste doloribus beatae laborum ducimus necessitatibus quaerat. Numquam beatae atque sunt facilis aspernatur, reiciendis delectus, earum aliquam ratione, laudantium vel reprehenderit!</p>
                <!-- <br> -->
                <p class="block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam doloribus laudantium tempore est quidem delectus facere necessitatibus, accusamus distinctio, iusto quis autem eveniet nemo consectetur in doloremque quo quisquam blanditiis?</p>
                <!-- <br> -->
                <button class="button is-link is-outlined">Download Resume</button>
            </div>
        </div>
    </section>
    <!-- End About -->



    <!-- Skill -->
    <section class="skill section">
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <h1 class="title has-text-centered brand-asep">What We Do</h1>
                <progress class="progress is-link is-small" value="50" max="100">30%</progress>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="has-text-centered">
                    <img src="dist/img/wd.png" alt="" class="image is-128x128 is-center mx-auto">
                    <h1 class="title">Web Design</h1>
                    <p class="heading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, distinctio!</p>
                </div>
            </div>
            <div class="column">
                <div class="has-text-centered">
                    <img src="dist/img/ap.png" alt="" class="image is-128x128 is-center mx-auto">
                    <h1 class="title">App Design</h1>
                    <p class="heading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, distinctio!</p>
                </div>
            </div>
            <div class="column">
                <div class="has-text-centered">
                    <img src="dist/img/photo.png" alt="" class="image is-128x128 is-center mx-auto">
                    <h1 class="title">Photography</h1>
                    <p class="heading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, distinctio!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skill -->

    <hr class="container">


    <!-- Portfolio -->
    <section class="section">
        <div class="tabs is-centered">
            <ul>
                <li class="is-active"><a>ALL</a></li>
                <li><a>WEB DESIGN</a></li>
                <li><a>PRINT DESIGN</a></li>
                <li><a>PHOTOGRAPHY</a></li>
                <li><a>ILLUSTRATION</a></li>
            </ul>
        </div>



    </section>
    <!-- End Portfolio -->


    <!-- Footer -->
    <footer class="footer">
        <div class="content has-text-centered">
            <a href="" class=""><i class="fa-brands fa-facebook-f"></i></a>
            <a href="" class=""><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="" class=""><i class="fa-brands fa-youtube"></i></a>
            <a href="" class=""><i class="fa-brands fa-github"></i></a>
            <a href="" class=""><i class="fa-brands fa-instagram"></i></a>
            <p>
                @2023 AsepSae. <strong>All Rights Reserved</strong>
            </p>
        </div>
    </footer>
    <!-- End Footer -->


    <script>
        $(document).ready(function() {

            // Check for click events on the navbar burger icon
            $(".navbar-burger").click(function() {

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");

            });
        });
    </script>
    <script src="dist/js/script.js"></script>
</body>

</html>