<div class="header-top">
    <div class="container">
        <div class="row">
            </div>
			</div>
		</div>

<header id="main-header-section" class="sticky-banner">
    <div class="container">
        <div class="nav-header">
            <a href="#" class="js-main-nav-toggle main-nav-toggle dark"><i></i></a>
            <h1 id="main-logo"><a href="index.php">Animals Australia</a></h1>
            <nav id="main-menu-wrap" role="navigation">
                <ul class="sf-menu" id="main-primary-menu">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="events.php" class="main-sub-ddown">Events</a>
                    </li>
                    <li>
                        <a href="volunteers.php" class="main-sub-ddown">Volunteers</a>
                    </li>
                    <li><a href="about.php">About</a></li>
                    <li class="active"><a href="blog.php">News</a></li>
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
