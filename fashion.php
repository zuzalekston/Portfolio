<?php include('basic.php'); 
?>

<body>
        
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
                            <a class="nav-link active" aria-current="page" href="beauty.php">Beauty</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="fashion.php">Fashion</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="plener.php">Plener</a>
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
            <div class="content">
                <div class="imageBox"> <!-- 1 image -->
                    <figure> 
                        <img class="image img-fluid" src="images/fashion/MX5A7985.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                
                <div class="imageBox"> <!-- 2 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/MX5A8116.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 3 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/MX5A7947.JPG" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 4 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/MX5A8080.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 5 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/12931.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 6 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/8766.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 7 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/12925.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 8 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/8767.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 9 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/_MG_1306gs.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 10 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/_DSC5437.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 11 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/_MG_1292gs.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 12 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/_DSC5443.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
            
                <div class="imageBox"> <!-- 13 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/XHMK2993.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 14 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/PW003364.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                
                <div class="imageBox"> <!-- 15 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/PW003639.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox"> <!-- 16 image -->
                    <figure>
                        <img class="image img-fluid" src="images/fashion/XHMK5114.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <!-- class 'img-fluid' z bootstrapa sprawia ze obraz jest responsywny -->
                        
                   
                
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