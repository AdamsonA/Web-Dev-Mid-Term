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
                    <div class="main-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/us.jpg);">
                        <div class="desc animate-box">
                            <h2>About <strong>US</strong></h2>
                        </div>
                    </div>
                </div>

                <div id="main-feature-product" class="main-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center heading-section">
                                <h3>How we started.</h3>
                                <p>Animals Australia was formed in 1980. We were originally called the Australian Federation of Animal Societies (AFAS). Co-Founders Professor Peter Singer and Dr Christine Townend recognised the need to unite the many animal protection groups in Australia to provide a united and strong voice on behalf of animals.
        A primary activity of the first decade of 'AFAS' was lobbying for and then actively contributing to the Senate Select Committee on Animal Welfare (its 11 reports are still key documents).
        In 1986 the federation introduced 'individual membership' in addition to the society membership structure, and also accepted New Zealand member groups; changing our name to Australian and New Zealand Federation of Animal Societies (ANZFAS).
        In the late 1990s we reverted to Australian groups only, and the name 'Animals Australia' was adopted. The organisation now uniquely undertakes two interwoven roles — as a peak body representing a large number of grass roots groups, and a campaign-focussed organisation working to raise community awareness of animal cruelty and promote reform.</p>
                            </div>
                        </div>

                        <div class="row row-bottom-padded-md">
                            <div class="col-md-12 text-center animate-box">
                                <p><img src="images/us_1.jpg" alt="" class="img-responsive"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="main-portfolio">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
                                <h3>Our Gallery</h3>
                                <p>If you are still not sure, what we are doing, then have a look how our amazing volunteers help animals.</p>
                            </div>
                        </div>


                        <div class="row row-bottom-padded-md">
                            <div class="col-md-12">
                                <ul id="main-portfolio-list">

                                    <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/us_2.jpg); ">
                                        <a href="#" class="color-3">
                                            <div class="case-studies-summary">
                                                <span>Kangaroo Island</span>
                                                <h2>Rehabilition of survived kangaroos</h2>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/us_4.jpg); ">
                                        <a href="#" class="color-4">
                                            <div class="case-studies-summary">
                                                <span>Gosford</span>
                                                <h2>Vet clinic</h2>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/us_3.jpg); ">
                                        <a href="#" class="color-5">
                                            <div class="case-studies-summary">
                                                <span>Sydney</span>
                                                <h2>Koala adoption</h2>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/us_5.jpg); ">
                                        <a href="#" class="color-6">
                                            <div class="case-studies-summary">
                                                <span>New Castle</span>
                                                <h2>Koala Rehabilitation Center</h2>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center animate-box">
                                <a href="#" class="btn btn-primary btn-lg">JOIN OUR TEAM</a>
                            </div>
                        </div>


                    </div>
                </div>

                <?php
                    require_once('./footer.php');
                ?>
	        </div>
	    </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/sticky.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/main.js"></script>
	</body>
</html>
