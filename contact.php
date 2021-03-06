<?php
    require_once('./identity.php');
?>
<!DOCTYPE html>
 <html class="no-js">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Animals Australia &mdash; </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/superfish.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<div id="main-wrapper">
            <div id="main-page">
                <?php
                    require_once('./header.php');
                ?>

                <div class="main-hero">
                    <div class="main-overlay"></div>
                    <div class="main-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/contact.jpg);">
                        <div class="desc animate-box">
                            <h2><strong>Contact</strong> Us</h2>
                        </div>
                    </div>
                </div>

                <div id="main-contact" class="animate-box">
                    <div class="container">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="section-title">Our Address</h3>
                                    <p>Animals Australia is Australia's leading animal protection organisation.</p>
                                    <ul class="contact-info">
                                        <li><i class="icon-location-pin"></i>37 O'Connell St NORTH MELBOURNE VIC 3051</li>
                                        <li><i class="icon-phone2"></i>1800 888 584</li>
                                        <li><i class="icon-mail"></i><a href="#">info@animalsaus.com</a></li>
                                        <li><i class="icon-globe2"></i><a href="#">www.AnimalsAustralia.org</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <?php
                    require_once('./footer.php');
                ?>
            </div>
	    </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/sticky.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/main.js"></script>
	</body>
</html>
