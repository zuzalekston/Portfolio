<?php include('basic.php'); ?>

<body>
        <div class="nav" style="background-color: #ffffff;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Zuzanna Lekston</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beauty</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Fashion</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Plener</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a class="nav-link" href="about.php">O mnie</a>
                    </span>
                    <span class="navbar-text">
                        <a class="nav-link" href="kontakt.php">Kontakt</a>
                    </span>
                    </div>
                </div>
            </nav>
        </div>
        <div class="wrapper">
         <div class="icon facebook">
            <div class="tooltip">
               Facebook
            </div>
            <span><a href="https://www.facebook.com/zuzanna.lekston"><i class="fab fa-facebook-f"></i></a></span>
         </div>
         <div class="icon instagram">
            <div class="tooltip">
               Instagram
            </div>
            <span><a href="https://www.instagram.com/zuzalekston/"><i class="fab fa-instagram"></i></a></span>
         </div>
         <div class="icon linkedin">
            <div class="tooltip">
               LinkedIn
            </div>
            <span><a href="https://www.linkedin.com/in/zuzanna-lekston-03ba231b5/"><i class="fab fa-linkedin"></i></a></span>
         </div>
         <div class="icon github">
            <div class="tooltip">
               Github
            </div>
            <span><a href="https://github.com/zuzalekston?tab=repositories"><i class="fab fa-github"></i></a></span>
         </div>
      </div>
        
        <footer>
            <p>Stronę wykonała <b>Zuzanna Lekston</b> | All rights reserved </br>
            zuzalekston@gmail.com
            </p>
            
            
        </footer>
</body>
<script src="jquery.min.js"></script>
    <script>
        $(document).ready(function() {
        var NavY = $('.nav').offset().top;
        
        var stickyNav = function(){
        var ScrollY = $(window).scrollTop();
            
        if (ScrollY > NavY) { 
            $('.nav').addClass('sticky');
        } else {
            $('.nav').removeClass('sticky'); 
        }
        };
        
        stickyNav();
        
        $(window).scroll(function() {
            stickyNav();
        });
        });
        
    </script>
</html>