<!DOCTYPE html>
<html>
<head>
	<link href="../Assets/CSS/gc_base.css" type="text/css" rel="stylesheet"/>
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
                <a href="registration.php">
                    <button class="btn">Sign up</button>
                </a>
            </div>        
            <div class="nav_content">
                <script type="text/javascript" src="../Assets/JS/menudrop.js"></script>
                    <button onclick="menudrop()" class="btn" id="dropbtn">Menu</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="http://www.glitchycyb.org"> Home </a>
                    <a href="../Registration/signup.php"> Sign Up </a>
                    <a href="../Technical/ech_Specs.php"> Tech Specs </a> 
                    <a href="#Comment"> Leave Feedback</a>
                    <a href="../Test/test.php"> Test</a> 
                </div>
            </div>  
        </div>
    </header>
    <div id="container">
        <div id="main">
            <div id="left_text" class="text_body_left">
                <h2> Welcome to Glitchy Cyborg </h2>
                <p>This is a test environment</p>
                <div id="file_input" class="test">
                <form id = "registration" action="Scripts/test_file.php" method="POST">
    	            <fieldset>
    	        	<legend>Output to file</legend>
                		<label>First Name:<br />
    	                	<input type="text" name ="fname"/></label><br />
    	            	<label>Last Name:<br />
    	                	<input type="text" name="lname"/></label><br />
                		<label>Username:<br />
    	                	<input type="text" name="uname"/></label><br />
    		            <label>Email:<br />
    		                <input type="email" name="email" required="required"></label><br />
    		                <input type="submit" value="submit" />
    	            </fieldset>
    	        </form>
            </div>
            </div>

            <div id="right_text" class="text_right_body">
                <div class="search-container" class="right-el">
                    <form action="search_site.php">
                        <input type="text" placeholder="search..." class="search-content">
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="right_el">
                    <h2> News </h2>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <p>Check out our <a href="https://github.com/dpgraham4401/glitchycyborg">GitHub </a> for updates</p>
        <?php
        echo "Last Commit<br>";
        system("git log -1 --format=%cd | awk '{print $1,$2,$3}'");
        ?>
    </footer>
</body>
</html>
