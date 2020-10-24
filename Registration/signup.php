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
        <div id="registration">
            <div id = "reg_form" class = "registration_form">
    	        <form action="registration.php" method="POST" onsubmit="return validate(this)">
    	            <fieldset>
    	        	<legend>Sign up</legend>
                		<label>First Name:<br />
    	                	<input type="text" name ="fname"/></label><br />
    	            	<label>Last Name:<br />
    	                	<input type="text" name="lname"/></label><br />
                		<label>Username:<br />
    	                	<input type="text" name="uname"/></label><br />
    		            <label>Email:<br />
    		                <input type="email" name="email" required="required"></label><br />
    		            <label>Password:<br />
    		                <input type="password" name="psswd1" required="required"/></label><br />
    		            <label>Confirm Password:<br />
    		                <input type="password" name="psswd2" required="required"/></label><br />
    		                <input type="submit" value="submit" />
                    </fieldset>
                </form>
            </div>
            <div id = "login_form" class = "registration_form">
                <form action="authenticate.php" method="POST">
    	            <fieldset>
    	        	<legend>Login</legend>
                		<label>Username:<br />
    	                	<input type="text" name ="uname"/></label><br />
    	            	<label>Password:<br />
    	                	<input type="password" name="psswd"/></label><br />
    		                <input type="submit" value="submit" />
                    </fieldset>
                </form>
            </div>
            <div id = "google_form" class = "registration_form">
                <h4 id="goog_title"> Currently signing in with google works <br> but your usename will not be logged </h4>
                <fieldset>
                    <legend> Login With Google </legend>
                    <div class="g-signin2" data-onsuccess="onSignIn" ></div>
                </fieldset>
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
