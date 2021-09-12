<?php include 'includes/basic.php';
?>

<body>

            <div class="nav">
                <?php include "includes/nav.php";
                    echo $nav;?>
            </div>
            <div class="content">
                <div class="imageBox"> <!-- 1 image -->
                    <figure>
                        <img class="image img-fluid" src="images/testy/PW005680gs.jpg" alt='Responsive image'/>
                    </figure>

                </div>

                <div class="imageBox"> <!-- 2 image -->
                    <figure>
                        <img class="image img-fluid" src="images/testy/PW005727gs.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 3 image -->
                    <figure>
                        <img class="image img-fluid" src="images/testy/_MG_1223gs.JPG" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 4 image -->
                    <figure>
                        <img class="image img-fluid" src="images/testy/PW005671gs.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 5 image -->
                    <figure>
                        <img class="image img-fluid" src="images/testy/_ND43000.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 6 image -->
                    <figure>
                        <img class="image img-fluid" src="images/testy/Zuza'n'Adam-21.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 7 image -->
                    <figure>
                        <img class="image img-fluid" src="images/testy/Zuza'n'Adam-28.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 8 image -->
                    <figure>
                        <img class="image img-fluid" src="images/testy/PW003243.jpg" alt='Responsive image'/>
                    </figure>

                </div>


                <!-- class 'img-fluid' z bootstrapa sprawia ze obraz jest responsywny -->



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
    <script>
		// var masonry = new Macy({
  		// 	container: '.imagesBox',
		// 	columns: 4,
		// });
        var masonry = new Macy({
            container: '.content',
            trueOrder: false,
            waitForimages: true,
            useOwnImageLoader: false,
            debug: true,
            mobileFirst: false,
            columnWidth: 200,
            columns: 4,
			breakAt: {
				1100: 4,
				900: 3,
				500: 2,
				400: 1,
			},
			margin: {
				x: 0,
				y: 0,
			}
        });
	</script>
</html>