<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DragonHost | Kontakt</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ================= Favicon ================== -->
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="icon" sizes="72x72" href="images/favicon/android-icon-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Ionicon css-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Font Awesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Jquery Countdown css-->
    <link rel="stylesheet" href="css/jquery.countdown.css">
    <!-- Magnific popup css-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- SLimple Light box-->
    <link rel="stylesheet" href="css/simplelightbox.css">
    <!-- Style css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Modernizr js-->
    <script src="js/modernizr-2.8.3.min.js"></script>
</head>
<body>
	<div class="preloader">
        <div class="loader">
            <div class="loader-inner line-scale-pulse-out">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
    </div>
    <?php
        include("element_header2.php");
    ?>
    <section class="banner-area blog-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Kontaktiere <strong>Uns</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/.banner-area-->
    <div class="main-content pdt40 pdb110">
        <div class="container">
            <div class="row">
                    <div class="comment-form">
                        <h3 class="heading">Message</h3>
                        <form id="contact">
                            <div class="row pdt20">
                                <div class="single-input">
                                    <input type="text" name="name" placeholder="Name" class="form-control" required/>
                                </div>
                                <div class="single-input">
                                    <input type="email" name="email" placeholder="Email" class="form-control" required/>
                                </div>
                            </div>
                            <div class="single-input">
                                <textarea name="message" rows="8" cols="80" placeholder="Message" required></textarea>
                            </div>
							<!-- Replace the 'value' of following input box with the
							Email address where you want to get emails via contact form -->
							<input type="hidden" name="recipient_email" value="snapixlp@neoncraft.net" />
							<!-- Replace the 'value' of following input box with the sender
							email address, note that: email address should from existing domain  -->
							<input type="hidden" name="from_email" value="contact@enroutedigitallab.com" />
                            <button type="submit" class="musica-button">Send</button>
                        </form>
                    </div><!--/.comment-form-->
                </div>
            </div>
        </div>
    </div>
    <?php
        include("element_footer.php");
        ?>
        
	<!-- == jQuery Librery == -->
    <script src="js/jquery-2.2.4.min.js"></script>
	<!-- == Bootsrap js File == -->
    <script src="js/bootstrap.min.js"></script>
    <!-- == Magnific Popup == -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- == Jquery Countdown == -->
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <!-- == Google Map == -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDTje3iuLAYQmMK3153NzxMto6GNzkzuCE"></script>
    <script type="text/javascript" src="js/map-init.js"></script>
	<!-- == Custom Js == -->
    <script src="js/custom.js"></script>
</body>
</html>
