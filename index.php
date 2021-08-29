
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
        <div id="container">
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
            <div id="content">
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/_SPP0003_72DPI.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/portaitissue 23 223.JPG" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/WDF_0890_S22.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/portaitissue 23 256.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/PW003573.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/_SPP0104_72DPI.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/portaitissue 23 224.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/_SPP0259_72DPI.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <div class="imageBox">
                    <figure>
                        <img class="image img-fluid" src="images/PW005727gs.jpg" alt='Responsive image'/>
                    </figure>
                    
                </div>
                <!-- class 'img-fluid' z bootstrapa sprawia ze obraz jest responsywny -->
                        
                   
                
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
    <script>
		// var masonry = new Macy({
  		// 	container: '.imagesBox',
		// 	columns: 4,
		// });
        var masonry = new Macy({
            container: '#content',
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