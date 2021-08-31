<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8"/>
        <link href="style.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title>Zuzanna Lekston</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/macy/2.5.1/macy.min.js" integrity="sha512-/o/3HSUNsIEsxRpMb5LdGO+algy6JHTf3tMn2VpWKfVexrEAepEzsuJPA51tJVdC9kCHsN5+Z4GJ35pcldgsGw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>	
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	    
    </head>
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
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/portaitissue 23 224.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/_SPP0003_72DPI.JPG" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/fashion/MX5A7875.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/portaitissue 23 256.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/beauty/127731.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/beauty/138892.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/portaitissue 23 223.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/docs-2.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/fashion/MX5A8080.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/beauty/IMG-20201005-WA0003 (2).jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/komercyjne/_SPP0104_72DPI.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/beauty/MX5A8221.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <!-- class 'img-fluid' z bootstrapa sprawia ze obraz jest responsywny -->
                        
                   
                
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