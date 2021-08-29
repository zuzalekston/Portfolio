<?php include('basic.php'); 
?>
<body id="contactBody">
        <div class="nav">
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
        <div  id="contactContent" class="content" >
            <div id="contactForm">
                <p><b>Skontaktuj się ze mną :)</b></p>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Twoje imię</b></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Adres e-mail</b></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><b>Wiadomość</b></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="buttonDiv">
                    <button class="button" type="button"><b>WYŚLIJ</b></button>
                </div>
            </div>
            
        </div>
        


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