<!DOCTYPE html>
<html>
<head>
	<link href="Assets/CSS/gc_base.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta name="description"
	      content="single board computer clusters"/>
	<meta name="keywords"
	      content="SOC, Rock64, cluster, single board computer, public, free"/>
	<meta name="robots"
	      content="nofollow"/>
	<meta http-equiv="author"
	      content="David Graham" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
	<title> Glitchy | Cyborg</title>
</head>
    <body>
    <?php
        session_start();
        ini_set('session.use_only_cookies', 1);
        ini_set('session.gc_maxlifetime', 60 * 40);
        if (isset($_SESSION['uname']))
        $uname = htmlspecialchars($_SESSION['uname']);
    ?>
    <header id="menu">
        <div id="menu-left">
            <div id="menu-icon" class="menu-content">
                 <img src="../Assets/Pictures/icon3_60x54.png" alt="icon"/>
            </div>
            <div id="menu-title" class="menu-content">
                   <h2> Glitchy Cyborg </h2>
            </div>
        </div>
        <div id="menu-right">      
            <div class="nav_content">
                <script type="text/javascript" src="Assets/JS/menudrop.js"></script>
                    <button onclick="menudrop()" class="btn" id="dropbtn">Menu</button>
                    <i class="fa fa-caret-down"></i>
                <div id="myDropdown" class="dropdown-content">
                    <a href="http://www.glitchycyb.org"> Home </a>
                    <a href="Technical/tech_Specs.php"> Tech Specs </a> 
                    <a href="#Comment"> Leave Feedback</a>
                </div>
            </div>
            <?php
                if (isset($uname))
                    echo <<< _END
                    <div class="nav_content">
                        <script type="text/javascript" src="Assets/JS/menudrop.js"></script>
                            <button onclick="profiledrop()" class="btn" id="dropbtn">$uname</button>
                            <i class="fa fa-caret-down"></i>
                        <div id="myProfile" class="dropdown-content">
                            <a href="User/profile.php"> Profile </a>
                            <a href="User/allocation.php"> Allocation </a>
                            <a href="./Registration/logout.php"> Log out </a>
                        </div>
                    </div>
                    _END;
                else
                echo <<< _END
                <div class="nav_content">
                    <a href="../Registration/signup.php">
                        <button class="btn">Sign In</button>
                    </a>
                </div>
                _END;
            ?>
        </div>
    </header>
    <div id="container">
        <div id="main">
            <div id="left_text" class="text_body_left">
                <h2> Welcome to Glitchy Cyborg </h2>
                <p>Thank you for visiting, Glitchy Cyborg is currently under construction
                Come back and visit us in a couple months </p>
                <br>
                <p>In the meantime, here is an picture of a <a href="/Assets/Pictures/puppy.jpg"> Puppy! </a></p>
            </div>
            <div id="right_text" class="text_right_body">
                <div class="search-container" class="right-el">
                    <form action="search_site.php">
                        <input type="text" placeholder="search..." class="search-content">
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                    <br>
                    <h2> News </h2>
                </div>
                <div class="right_el">
                    <?php
                        $news_dir = 'Assets/News/';
                        $files =  (scandir($news_dir));
                        foreach($files as $news)
                        {
                            $content = file_get_contents($news_dir . $news);
                            if ($content) echo <<< _END
                                <p>$content</p>
                                <br>
                                <br>
                            _END;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <p>Check out our <a href="https://github.com/dpgraham4401/glitchycyborg">GitHub </a> for updates</p>
        <?php
        echo "Last Commit: ";
        system("git log -1 --format=%cd | awk '{print $1,$2,$3}'");
        ?>
    </footer>
</body>
</html>
