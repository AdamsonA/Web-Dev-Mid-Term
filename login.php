		
<?php
    require_once('./identity.php');

    $msg = '';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if ($isLoggedin) {
            redirect('blog.php');
        }
    } 
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['login'])) {
            if (empty($_POST['username']) || empty($_POST['password'])) {
                $msg = 'Invalid parameters';
            }
            $msg = login($_POST['username'], $_POST['password'], 'blog.php');
        }
    }
?>

<!DOCTYPE html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Charity</title>
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
            <div id="main-blog-section" class="main-section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <form class="form-signin" role="form" action="login.php" method="post">
                                <h4 class="form-signin-heading"><?php echo $msg;?></h4>
                                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
                            </form>
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
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

