<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-left main-link">
                <a href="#">FAQ</a>
                <a href="#">Forum</a>
                <a href="#">Contact</a>
            </div>
            <div class="col-md-6 col-sm-6 text-right main-social">
                <a href="#" class="grow"><i class="icon-facebook2"></i></a>
                <a href="#" class="grow"><i class="icon-twitter2"></i></a>
                <a href="#" class="grow"><i class="icon-instagram2"></i></a>
            </div>
        </div>
    </div>
</div>
<header id="main-header-section" class="sticky-banner">
    <div class="container">
        <div class="nav-header">
            <a href="#" class="js-main-nav-toggle main-nav-toggle dark"><i></i></a>
            <h1 id="main-logo"><a href="index.php">Charity</a></h1>
            <nav id="main-menu-wrap" role="navigation">
                <ul class="sf-menu" id="main-primary-menu">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#" class="main-sub-ddown">Get Involved</a>
                        <ul class="main-sub-menu">
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Fundraise</a></li>
                            <li><a href="#">Campaign</a></li>
                            <li><a href="#">Philantrophy</a></li>
                            <li><a href="#">Volunteer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-sub-ddown">Projects</a>
                            <ul class="main-sub-menu">
                            <li><a href="#">Water World</a></li>
                            <li><a href="#">Cloth Giving</a></li>
                            <li><a href="#">Medical Mission</a></li>
                        </ul>
                    </li>
                    <li><a href="about.php">About</a></li>
                    <li class="active"><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php if ($isLoggedin): ?>
                        <li><a href="logout.php">SignOut</a></li>
                    <?php else : ?>
                        <li><a href="login.php">Login</a></li>';
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>