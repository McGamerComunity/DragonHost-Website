<?php
function type($type) {
    if ($type=="entwickler") {
        return "Entwickler";
    } else
    if ($type=="techniker") {
        return "Techniker";
    } else
    if ($type=="supporter") {
        return "Supporter";
    } else
    if ($type=="content") {
        return "Content";
    } else {
        return "error";
    }

}
if (!file_exists("jobs/".$_GET['job'].".json")) {
    $jdes['todo']="Keine Beschreibung ferfügbar für: " . type($_GET['job']);
    $jdes['bwy']="Keine Beschreibung ferfügbar für: " . type($_GET['job']);
} else {
    $json=json_decode("jobs/".$_GET['job'].".json");
    $jdes['todo']=$json['todo'];
    $jdes['bwy']=$json['bwy'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DragonHost | Bewerbung als <?php echo type($_GET['job']); ?></title>
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
                        <h1>Bewerbung als <strong><?php echo type($_GET['job']); ?></strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/.banner-area-->
    <div class="main-content pdt40 pdb110">
        <div class="container">
            <div class="row">
                <div class="comment-form">
                    <h3 style="padding-bottom: 10px !important;" class="heading">Welche Tätigkeiten erwarten dich?</h3>
                    <p><?php echo $jdes['todo']; ?></p>
                    <h3 style="padding-bottom: 10px !important;" class="heading">Dies solltest du mitbringen...</h3>
                    <p><?php echo $jdes['wyd']; ?></p>

                </div>
            </div>
            <div class="row">
                    <div class="comment-form">
                        <h3><strong>Du bist interessiert? Dann kannst du dich hier</strong></h3>
                        <h3 class="heading">Bewerben</h3>
                        <form id="contact">
                            <div class="row pdt20">
                                <div class="single-input">
                                    <input type="text" name="name" placeholder="Dein Name" class="form-control" required/>
                                </div>
                                <div class="single-input">
                                    <input type="email" name="email" placeholder="Deine Email" class="form-control" required/>
                                </div>
                            </div>
                            <div class="row pdt20">
                                <div class="single-input">
                                    <input type="text" name="age" placeholder="Dein Alter" class="form-control" required/>
                                </div>
                                <div class="single-input">
                                    <input type="text" name="time" placeholder="Verfügbare Zeit in Stunden pro Woche" class="form-control" required/>
                                </div>
                            </div>
                            <div class="single-input">
                                <input type="text" name="about" placeholder="Stell dich bitte kurz vor" class="form-control" required/>
                            </div>
                            <div class="single-input">
                                <input type="text" name="strenghts" placeholder="Deine Stärken und Schwächen" class="form-control" required/>
                            </div>
                            <div class="single-input">
                                <input type="text" name="experience" placeholder="Welche Erfahrungen hast du bis jetzt?" class="form-control" required/>
                            </div>
                            <div class="single-input">
                                <input type="text" name="whyyou" placeholder="Wieso genau dich?" class="form-control" required/>
                            </div>
                            <div class="single-input">
                                <textarea name="message" rows="8" cols="80" placeholder="Wenn du noch was loswerden willst, schreib es hier rein." required></textarea>
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
