<?php include 'includes/basic.php';?>

<body>
        <div class="nav" style="background-color: #ffffff;">
            <?php include "includes/nav.php";
            echo $nav;?>
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