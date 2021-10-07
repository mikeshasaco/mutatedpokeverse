<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    


    <!-- Webpage Title -->
    <title>Mutated Pokeverse</title>
    
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="http://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<!-- Favicon  -->
    <link rel="icon" href="meltedpoka.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
     
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">
            
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Pavo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="meltedpoka.png" alt="alternative" height="57" width="57"></a> 

            <!-- <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">Details</a>
                    </li>
               
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#download">Download</a>
                    </li>
                </ul>
               
            </div>  -->
                <!-- <button style="   
                 font-weight: bold;
                 padding:12px;
    cursor: pointer;
    border-radius: 50px;
    border-color: white;
    align-self: var(--align);
    margin: 0;">Connect Wallet</button> -->
    <a class="btn btn-danger" href="http://mint.pokeversenft.com/"  style=" text-decoration: none;">Click To Mint</a>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->



    @yield('content')



   

    <!-- Footer -->
    <div class="footer" > 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="social-container">
                    
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"> <a href="https://twitter.com/MPokeverse" target="_blank"></a> </i>
                            </a>
                        </span>
                      
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    	

    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->

    @yield('javascripts')

</body>
</html>