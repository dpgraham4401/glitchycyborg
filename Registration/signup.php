<!DOCTYPE html>
<html>
<head>
	<link href="../Assets/CSS/cellformat.css" type="text/css" rel="stylesheet" />
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
	
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="270442490877-fu2uqtsgdcs4o28rr6rqj3eqacc8b9ro.apps.googleusercontent.com">

	<title> Glitchy | Cyborg</title>
</head>
<body>
    <header id="menu">
    	<!-- leftside of the header -->
        <div id="menu-left">
            <div id="menu-icon" class="menu-content">
                 <img src="../Assets/Pictures/icon3_60x54.png" alt="icon"/>
            </div>
            <div id="menu-title" class="menu-content">
                   <h2> Glitchy Cyborg </h2>
            </div>
        </div>
        <!-- Navigation (right side of the header) -->
        <div id="menu-right" class="menu-content">
            <div class="nav_content">
                <script type="text/javascript" src="../Assets/JS/menudrop.js"></script>
                    <button onclick="menudrop()" class="btn" id="dropbtn">Menu</button>
                    <i class="fa fa-caret-down"></i>
                <div id="myDropdown" class="dropdown-content">
                    <a href="http://www.glitchycyb.org"> Home </a>
                    <!-- <a href="../Registration/signup.php"> Sign In </a> -->
                    <a href="../Technical/tech_Specs.php"> Tech Specs </a> 
                    <a href="#Comment"> Leave Feedback</a>
                </div>
            </div>
            <div class="nav_content">
            <?php
                if (isset($uname))
                    echo <<< _END
                    <div class="nav_content">
                        <script type="text/javascript" src="Assets/JS/menudrop.js"></script>
                            <button onclick="profiledrop()" class="btn" id="dropbtn">$uname</button>
                            <i class="fa fa-caret-down"></i>
                        <div id="myProfile" class="dropdown-content">
                            <a href="../User/profile.php"> Profile </a>
                            <a href="../User/allocation.php"> Allocation </a>
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
    <div id="container" >
        <main class="page_content">
            <div class="cells">
                <div class="cell_grid">
                    <section class="cell_row">
                        <section class = "cell_sub_col">
                            <div class="card_title">
                                <h2>Sign up</h2>
                            </div>
                            <section class="sub_cell">
                                <form action="registration.php" method="POST" onsubmit="return validate(this)">
                                    <div class="fieldset">
                                        <div class="input_sect">
                                            <div class="input_field">
                                                <label>
                                                    <input id="fname" type="text" name ="fname" class="input_text"/>
                                                    <label for="fname" class="input_label">First name</label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input_sect">
                                            <div class="input_field">
                                                <label>
                                                    <input id="lname" type="text" name ="lname" class="input_text"/>
                                                    <label for="lname" class="input_label">Last name</label>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="input_sect">
                                            <label>Last Name:<br />
                                            <input type="text" name="lname"/></label><br />
                                        </div> -->
                                        <div class="input_sect">
                                            <div class="input_field">
                                                <label>
                                                    <input id="uname" type="text" name ="uname" class="input_text"/>
                                                    <label for="uname" class="input_label">Username</label>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="input_sect">
                                            <label>Username:<br />
                                            <input type="text" name="uname"/></label><br />
                                        </div> -->
                                        <div class="input_sect">
                                            <div class="input_field">
                                                <label>
                                                    <input id="email" type="email" name ="email" required="required" class="input_text"/>
                                                    <label for="email" class="input_label">Email Address</label>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="input_sect">
                                            <label>Email:<br />
                                            <input type="email" name="email" required="required">
                                        </label><br />
                                        </div> -->
                                        <div class="input_sect">
                                            <div class="input_field">
                                                <label>
                                                    <input id="psswd1" type="password" name ="psswd1" required="required" class="input_text"/>
                                                    <label for="psswd1" class="input_label">Password</label>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="input_sect">
                                            <label>Password:<br />
                                            <input type="password" name="psswd1" required="required"/></label><br />
                                        </div> -->
                                        <div class="input_sect">
                                            <div class="input_field">
                                                <label>
                                                    <input id="psswd2" type="password" name ="psswd2" required="required" class="input_text"/>
                                                    <label for="psswd2" class="input_label">Verify Password</label>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="input_sect">
                                            <label>Confirm Password:<br />
                                            <input type="password" name="psswd2" required="required"/></label><br />
                                        </div> -->
                                        <input type="submit" value="submit" />
                                    </div>
                                </form>
                            </section>
                        </section>
                    </section>
                    <section class="cell_row">
                        <section id = "login_form" class = "cell_sub_col">
                            <section class="sub_cell">
                                <section class="sub_content">
                                    <form action="authenticate.php" method="POST">
                                        <fieldset>
                                            <label>Username:<br />
                                                <input type="text" name ="uname"/></label><br />
                                            <label>Password:<br />
                                                <input type="password" name="psswd"/></label><br />
                                                <input type="submit" value="submit" />
                                        </fieldset>
                                    </form>
                                </section>
                            </section>
                        </section>
                    </section>
                    <section class="cell_row">
                        <section id = "google_form" class = "cell_sub_col">
                            <section class="sub_cell">
                                <h4 id="goog_title"> Currently signing in with google works <br> but your usename will not be logged </h4>
                                <fieldset>
                                    <div class="g-signin2" data-onsuccess="onSignIn" ></div>
                                </fieldset>
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
    <script>
        function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        }
    </script>
<script src="../Assets/JS/auth_check.js"></script>
</body>
</html>
