<?php
    require_once('./identity.php');
    require_once('./core/database.php');
    require_once('./core/queries.php');
    require_once('./core/helpers.php');

    $query = allNewsItem();
    $newsItems = runQuery($query);
    $msg = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['postNews'])) {
            if (empty($_POST['title']) || empty($_POST['message'])) {
                $msg = 'Invalid parameters';
            } else {
                $username = $currentUser;
                $message = $_POST['message'];
                $title = $_POST['title'];
                $imageUrl = $_POST['imageUrl'];
                $query = createNewNews($username, $message, $title, $imageUrl);
                runQuery($query);

                header("Location: " . $_SERVER['REQUEST_URI']);
                exit();
            }
        }
    }
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charity &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<?php
            require_once('./header.php');
        ?>

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
				<div class="desc animate-box">
					<h2>Our <strong>Blog &amp; News</strong></h2>
					<span>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></span>
					<span><a class="btn btn-primary btn-lg" href="#">Donate Now</a></span>
				</div>
			</div>
		</div>
		
		<?php if ($isAdmin): ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <form role="form" method="post" action="blog.php">
                        <h4><?php echo $msg;?></h4>
                        <input type="text" class="form-control" name="title" placeholder="Title" required autofocus>
                        <textarea rows="3" class="form-control" name="message" placeholder="Message" required></textarea>
                        <input type="text" class="form-control" name="imageUrl" placeholder="Image Url" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="postNews">Create</button>
                    </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>

		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Read. Learn. Share</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
                    <?php foreach ($newsItems as $key): ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="fh5co-blog animate-box">
                                <a href="#"><img class="img-responsive" src="<?php echo $key["image_url"]; ?>" alt=""></a>
                                <div class="blog-text">
                                    <div class="prod-title">
                                        <h3><a href=""#><?php echo $key["title"]; ?></a></h3>
                                        <span class="posted_by">Sep. 15th</span>
                                        <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                        <p><?php echo $key["message"]; ?></p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    <?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- fh5co-blog-section -->
		<?php
            require_once('./footer.php');
        ?>
	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

