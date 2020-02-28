<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-left wmt-link">
                <a href="#">FAQ</a>
                <a href="#">Forum</a>
                <a href="#">Contact</a>
            </div>
            <div class="col-md-6 col-sm-6 text-right wmt-social">
                <a href="#" class="grow"><i class="icon-facebook2"></i></a>
                <a href="#" class="grow"><i class="icon-twitter2"></i></a>
                <a href="#" class="grow"><i class="icon-instagram2"></i></a>
            </div>
        </div>
    </div>
</div>
<header id="wmt-header-section" class="sticky-banner">
    <div class="container">
        <div class="nav-header">
            <a href="#" class="js-wmt-nav-toggle wmt-nav-toggle dark"><i></i></a>
            <h1 id="wmt-logo"><a href="index.html">Charity</a></h1>
            <nav id="wmt-menu-wrap" role="navigation">
                <ul class="sf-menu" id="wmt-primary-menu">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#" class="wmt-sub-ddown">Get Involved</a>
                        <ul class="wmt-sub-menu">
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Fundraise</a></li>
                            <li><a href="#">Campaign</a></li>
                            <li><a href="#">Philantrophy</a></li>
                            <li><a href="#">Volunteer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="wmt-sub-ddown">Projects</a>
                            <ul class="wmt-sub-menu">
                            <li><a href="#">Water World</a></li>
                            <li><a href="#">Cloth Giving</a></li>
                            <li><a href="#">Medical Mission</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="active"><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
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