<?php include 'includes/basic.php';
?>
<body id="contactBody">
        <div class="nav" style="background-color: #ffffff;">
            <?php include "includes/nav.php";
                echo $nav;?>
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
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><b>Wiadomość</b></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="buttonDiv">
                    <button class="button" type="button"><b>WYŚLIJ</b></button>
                </div>
            </div>



        <footer>
            <?php include "includes/footer.php";
echo $footer;?>
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