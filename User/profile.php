<!DOCTYPE html>
<html>
<head>
	<link href="../Assets/CSS/cellformat.css" type="text/css" rel="stylesheet"/>
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
        $fname = htmlspecialchars($_SESSION['fname']);
        $lname = htmlspecialchars($_SESSION['lname']);
        $uname = htmlspecialchars($_SESSION['uname']);
        $email = htmlspecialchars($_SESSION['email']);
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
                <script type="text/javascript" src="../Assets/JS/menudrop.js"></script>
                    <button onclick="menudrop()" class="btn" id="dropbtn">Menu</button>
                    <i class="fa fa-caret-down"></i>
                <div id="myDropdown" class="dropdown-content">
                    <a href="http://www.glitchycyb.org"> Home </a>
                    <a href="../Technical/tech_Specs.php"> Tech Specs </a> 
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
                            <a href="profile.php"> Profile </a>
                            <a href="allocation.php"> Allocation </a>
                            <a href="../Registration/logout.php"> Log out </a>
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
        <main class="page_content">
            <div class="cells">
                <div class="cell_grid">
                    <section class="cell_row">
                        <section class="profile_card cell_sub_col">
                            <div class="card_title">
                                <h2>Your Account</h2>
                            </div>
                            <section class="user_info sub_cell">
                                <div class="sub_content">
                                    <div class="action_header">
                                        <span><h3>Personal info</h3></span>
                                        <button class="action_header_btn">Update username </button>
                                    </div>
                                    <p><?php if (isset($uname))
                                        echo $uname; ?> </p>
                                    <p><?php if (isset($fname))
                                        echo $fname; ?> </p>
                                    <p><?php if (isset($lname))
                                        echo $lname; ?> </p>
                                </div>
                            </section>
                            <section class="contact_info sub_cell">
                                <div class="sub_content">
                                    <div class="action_header">
                                    <h4>Contact Info</h4>
                                    <button class="action_header_btn">Update contact info </button>
                                    </div>
                                    <p><?php if (isset($email))
                                        echo $email; ?> </p>
                                </div>
                            </section>
                            <section class="psswd_info sub_cell">
                                <div class="sub_content">
                                    <div class="action_header">
                                    <h4>Password</h4>
                                    <button class="action_header_btn">Change password </button>
                                    </div>
                                    <p>•••••••••</p>
                                </div>
                            </section>
                            <section class="logout sub_cell">
                                <div class="sub_content">
                                    <div class="action_header">
                                    <button class="action_header_btn"><h3>Logout</h3></button>
                                    </div>
                                </div>
                            </section>
                            <section class="delete_account sub_cell">
                                <div class="sub_content">
                                    <div class="action_header">
                                    <button class="action_header_btn"><h3>Delete Account</h3></button>
                                    </div>
                                </div>
                            </section>
                        </section>
                        <section class="subscription_card cell_sub_col">
                        <div class="card_title">
                                <h2>A word on Privacy and Security</h2>
                            </div>
                            <section class="message sub_cell">
                                <div class="sub_content">
                                    <p>Hi! <br> First off, we promise we will never give away your personal info,
                                    contact info or anything. I you're using Chrome you're practically giving away your info anyways
                                    but that's a conversation for another day.</p>
                                    <br>
                                    <p> Now, a word on security, we advise you do not use a password on our site that you also 
                                    use on other sites that contain personal or sensitive information. We're working hard to 
                                    protect your info but this site is continually developing, and do not gaurantee anything.
                                    We do require a password with atleast 6 characters, with at least one uppercase, one lowercase and one number</p>
                                </div>
                            </section>
                        </section>
                    </section>
                </div>
            </div>
        </main>
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
