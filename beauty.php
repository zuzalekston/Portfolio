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
                        <img class="image img-fluid" src="images/beauty/IMG-20201005-WA0003 (2).jpg" alt='Responsive image'/>
                    </figure>

                </div>

                <div class="imageBox"> <!-- 2 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/_SPP0097_72DPI.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 3 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/127733.JPG" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 4 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/138922.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 5 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/24726188_10215207877657234_646232581_o.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 6 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/_SPP0259_72DPI.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 7 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/received_386331926138175.jpeg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 8 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/_SPP9999_72DPI.jpg" alt='Responsive image'/>
                    </figure>

                </div>

                <div class="imageBox"> <!-- 9 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/135018.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 10 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/127731.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 11 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/135017.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 12 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/127718.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 13 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/_DSC5389.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 14 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/138882.jpg" alt='Responsive image'/>
                    </figure>

                </div>

                <div class="imageBox"> <!-- 15 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/_DSC5402.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox"> <!-- 16 image -->
                    <figure>
                        <img class="image img-fluid" src="images/beauty/138892.jpg" alt='Responsive image'/>
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