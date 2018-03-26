<!--Template for the header to be used on all pages-->
<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-bg-blue justify-content-between">
        <a class="logoImage" href="pagesPHP/index.php">
            <img src="../img/group(4).png" alt="Company logo">
        </a>
        <a class="logoBtn" href="pagesPHP/index.php">The Fontys People </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <div class="navbar-nav navbar-right ml-auto">
                <a class="nav-item <?php echo ($page == 'index.php') ? "active" : ""; ?>" href="index.php">Home</a>
                <a class="nav-item
                <?php echo ($page == 'thepeople.php' || $page == 'students.php' || $page == 'teachers.php') ? "active" : ""; ?>"
                   href="thePeople.php?target=home">The People</a>
                <a class="nav-item <?php echo ($page == 'mypage.php') ? "active" : ""; ?>" href="mypage.php">My Page</a>
                <a class="nav-item <?php echo ($page == 'aboutnews.php' || $page=='aboutidea.php'||$page=='aboutcontact.php') ? "active" : ""; ?>"
                   href="about_news.php">About</a>
            </div>
        </div>
    </nav>
</header>