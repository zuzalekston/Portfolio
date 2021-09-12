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
                        <img class="image img-fluid" src="images/plener/_10804681 (5).jpg" alt='Responsive image'/>
                    </figure>

                </div>

                <div class="imageBox"> <!-- 2 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/docs.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 3 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/_DSC0871.JPG" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 4 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/_MG_1943.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 5 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/_DSC0886.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 6 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/_10803571 (2).jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 7 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/_10804681 (3).jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 8 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/131080519_2468506766783724_8962474612531918106_n.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 9 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/Zuza_Lekston_050.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 10 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/_P0A9110.jpg" alt='Responsive image'/>
                    </figure>

                </div>


                <div class="imageBox"> <!-- 11 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/_DSC0870.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 12 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/received_307196969832239.jpeg" alt='Responsive image'/>
                    </figure>

                </div>

                <div class="imageBox"> <!-- 13 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/_P0A9282.jpg" alt='Responsive image'/>
                    </figure>

                </div>

                <div class="imageBox"> <!-- 14 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/Zuza_Lekston_028.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 15 image -->
                    <figure>
                        <img class="image img-fluid" src="images/plener/131286964_1477392282456463_8541198632925748092_n.jpg" alt='Responsive image'/>
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