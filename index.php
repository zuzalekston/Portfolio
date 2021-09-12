<?php  include("includes/basic.php");
?>
    <body>
        
            <div class="nav">
            <?php include "includes/nav.php";
                    echo $nav;?>
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
        
        
            <footer>      
                <?php include("includes/footer.php");
                echo $footer; ?>  
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