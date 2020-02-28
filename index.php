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
                    <div class="main-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/main.jpg);">
                        <div class="desc animate-box">
                            <h2><strong>Donate</strong> for the <strong>Animals in Australia</strong></h2>
                            <span> Help us save wildlife, and now the fires have cleared, restore our lost forests.</span>
                            <span><a class="btn btn-primary btn-lg" href="donate.php">Donate Now</a></span>
                        </div>
                    </div>
                </div>

                <div id="main-features">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature-left">
                                    <div class="feature-copy">
                                        <h3>Giving is good</h3>
                                        <p>Scientific research provides compelling data to support the anecdotal evidence that giving is a powerful pathway to personal growth and lasting happiness.</p>
                                        <p><a href="#">Learn More</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="feature-left">
                                    </span>
                                    <div class="feature-copy">
                                        <h3>Become a volunteer</h3>
                                        <p>It’s been estimated that 1.25 billion native animals have perished in the Australian bushfires, including koalas, kangaroos, wallabies, wombats, echidnas and more. As many as 8,400 koalas may have already perished in the fires in NSW alone, and these numbers continue to rise. These fires are a threat to people, as well as our wildlife. Come to join us to help restore forests in Australia - a home to many animals.</p>
                                        <p><a href="#">Learn More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-left">
                                    </span>
                                    <div class="feature-copy">
                                        <h3>Donation</h3>
                                        <p>100% of your donation brings Australian animals to safety.</p>
                                        <p><a href="#">Learn More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="main-feature-product" class="main-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center heading-section">
                                <h3>Help Lives.</h3>
                                <p>According to Harvard scientist Michael Norton, “Giving to a cause that specifies what they’re going to do with your money leads to more happiness than giving to an umbrella cause where you’re not so sure where your money is going. It’s been estimated that around 1.25 billion animals have been killed across Australia to date.
                                   This includes thousands of koalas and other iconic species such as kangaroos, wallabies, kookaburras, cockatoos and honeyeaters burnt alive, and many thousands more injured and homeless.The catastrophic megafires that swept across  country have greatly exacerbated the species extinction crisis we’re already facing.  That's why WWF-Australia has called for immediate global support to establish a AUD$30 million Australian Wildlife and Nature Recovery Fund. Help to save lives of wildlife.</p>
                            </div>
                        </div>

                        <div class="row row-bottom-padded-md">
                            <div class="col-md-12 text-center animate-box">
                                <p><img src="images/pic1.jpg" alt="" class="img-responsive"></p>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <p><img src="images/img2.jpg" alt="" class="img-responsive"></p>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <p><img src="images/pic2.jpg" alt="" class="img-responsive"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="main-content-section" class="main-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h3>Our Story</h3>
                                <p>Animals Australia is Australia's foremost national animal protection organisation.

                                    We represent over 2 million individual members and supporters. Animals Australia, along with our global arm, Animals International, has an unprecedented track record in investigating and exposing animal cruelty and for conducting world-first strategic public awareness campaigns.
                                    <b>Our Mission:</b>

                                    Investigate, expose and raise community awareness of animal cruelty.
                                    Provide animals with the strongest representation possible to Government and other decision-makers.
                                    Educate, inspire, empower and enlist the support of the community to prevent and prohibit animal cruelty.
                                    Strengthen the animal protection movement.
                                </p>
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
       
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/sticky.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/main.js"></script>
	</body>
</html>
