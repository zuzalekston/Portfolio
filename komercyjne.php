<?php include 'includes/basic.php';
?>

<body>

            <div class="nav">
                <?php include "includes/nav.php";
                echo $nav;?>
            </div>
            <div class="content">
                <div class="imageBox komercyjne"> <!-- 1 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/docs.jpg" alt='Responsive image'/>
                    </figure>

                </div>

                <div class="imageBox komercyjne"> <!-- 2 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/docs-3.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 3 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/docs-2.JPG" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 4 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/docs-4.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 5 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/docs-1.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 6 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/_SPP0097_72DPI.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 7 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/_SPP9999_72DPI.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 8 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/_SPP0259_72DPI.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 9 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/_SPP0104_72DPI.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 10 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/_SPP0003_72DPI.jpg" alt='Responsive image'/>
                    </figure>

                </div>


                <div class="imageBox komercyjne"> <!-- 11 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/portaitissue 23 222.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 12 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/portaitissue 23 223.jpg" alt='Responsive image'/>
                    </figure>

                </div>

                <div class="imageBox komercyjne"> <!-- 13 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/portaitissue 23 256.jpg" alt='Responsive image'/>
                    </figure>

                </div>

                <div class="imageBox komercyjne"> <!-- 14 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/portaitissue 23 224.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 15 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/portaitissue 23 225.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 16 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/WDF_0760_S22.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 17 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/WDF_0890_S22.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 18 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/WDF_0849_S22.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 19 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/WDF_0872_S22.jpg" alt='Responsive image'/>
                    </figure>

                </div>
                <div class="imageBox komercyjne"> <!-- 20 image -->
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/WDF_0901_S22.jpg" alt='Responsive image'/>
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
            columns: 5,
			breakAt: {
				1100: 5,
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