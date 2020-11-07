<!DOCTYPE html>
<html>
<head>
	<link href="../Assets/CSS/gc_base.css" type="text/css" rel="stylesheet" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta name="description"
	      content="single board computer clusters" />
	<meta name="keywords"
	      content="SOC, Rock64, cluster, single board computer, public, free" />
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
    <header class="top_bar">
        <div class="menu_wrapper">
            <div class="menu_sect">
                <div class="menu_icon menu_content">
                    <img src="../Assets/Pictures/icon3_60x54.png" alt="icon"/>
                </div>
                <div class="menu_title menu_content">
                    <h2> Glitchy Cyborg </h2>
                </div>
            </div>
            <div class="menu_sect">
                <div class="menu_content menu_btn">
                    <button onclick="menudrop()" class="btn" id="dropbtn">Menu <i class="fa fa-caret-down"></i></button>
                </div>
                <div class="menu_content">
                    <div id="myDropdown" class="dropdown-content">
                        <a href="http://www.glitchycyb.org"> Home </a>
                        <a href="Technical/tech_Specs.php"> Tech Specs </a> 
                        <a href="#Comment"> Leave Feedback</a>
                    </div>
                </div>
                <?php
                    if (isset($uname))
                        echo <<< _END
                        <div class="menu_content menu_btn">
                            <button onclick="profiledrop()" class="btn" id="dropbtn">$uname <i class="fa fa-caret-down"></i></button>
                        </div>
                        <div class="menu_content">
                            <div id="myProfile" class="dropdown-content">
                                <a href="User/profile.php"> Profile </a>
                                <a href="User/allocation.php"> Allocation </a>
                                <a href="./Registration/endsession.php"> Log out </a>
                            </div>
                        </div>
                        _END;
                    else
                    echo <<< _END
                    <div class="menu_content menu_btn">
                        <a href="../Registration/signup.php">
                            <button class="btn">Sign In</button>
                        </a>
                    </div>
                    _END;
                ?>
            </div>
        </div>
    </header>
    <div id="container" >
        <div id="main">
            <div id="left_text">
                <h3 id="thanks"> Thanks for Signing up! </h3>
                <p>You can head back to our <a href="http://www.glitchycyb.org"> homepage </a> or... I dunno, do what you want. 
                There's nothing else on the site yet soooo... yeaahhhh. This is awkward.</p>
                <br>
                <p>Eventually there'll be something here on how to get started after signing up</p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../Assets/JS/menudrop.js"></script>
    <footer id="footer">
        <p>This IS a footer </p>
    </footer>
</body>
</html>
