
<header class="header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php"><figure class="mb-0 banner-logo"><img src="./assets/images/logo.png" alt="" class="img-fluid"></figure></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
                        <li class="nav-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
                            <a href="index.php" title="Pages">Home</a>
                        </li>
                        <li class="nav-item <?= ($current_page == 'about.php') ? 'active' : '' ?>">
                            <a href="about.php" title="About Us">About</a>
                        </li>
                        <li class="nav-item <?= ($current_page == 'services.php') ? 'active' : '' ?>">
                            <a href="services.php" title="Our Services">Services</a>
                        </li>
                        <li class="nav-item <?= ($current_page == 'projects.php') ? 'active' : '' ?>">
                            <a href="projects.php" title="Our Projects">Projects</a>
                        </li>
                        <li class="nav-item <?= ($current_page == 'faq.php') ? 'active' : '' ?>">
                            <a href="faq.php" title="FAQ">FAQ</a>
                        </li>
                        <li class="nav-item <?= ($current_page == 'contact-us.php') ? 'active' : '' ?>">
                            <a href="contact-us.php" title="Contact Us">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lets_talk" href="contact-us.php">Let's Talk<i class="circle fa-regular fa-angle-right"></i></a>
                        </li>
                    </ul>
                   
                </div>
            </nav>
        </div>
    </header>