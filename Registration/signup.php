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
                <a href="../Registration/signup.php">
                    <button class="btn">Sign up</button>
                </a>
            </div>        
            <div class="nav_content">
                <script type="text/javascript" src="../Assets/JS/menudrop.js"></script>
                    <button onclick="menudrop()" class="btn" id="dropbtn">Menu</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="http://www.glitchycyb.org"> Home </a>
                    <a href="../Registration/signup.php"> Sign Up </a>
                    <a href="../Technical/tech_Specs.php"> Tech Specs </a> 
                    <a href="#Comment"> Leave Feedback</a>
                </div>
            </div>  
        </div>
    </header>
    <div id="container" >
        <div id="main">
	        <form id = "registration" action="registration.php">
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
    </div>
    <footer id="footer">
        <p>This IS a footer </p>
    </footer>
</body>
</html>
