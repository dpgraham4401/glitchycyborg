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
                        <a href="../Technical/tech_Specs.php"> Tech Specs </a> 
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
                                <a href="profile.php"> Profile </a>
                                <a href="allocation.php"> Allocation </a>
                                <a href="../Registration/endsession.php"> Log out </a>
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
    <div id="container">
        <div id="main">
            <div id="left_text" class="text_body_left">
                <div id = allocation>
                    <h3>Gaea Allocation</h3>
                    <table>
                        <tr>
                            <!-- <th rowspan="2" >Gaea</th> -->
                            <th>Storage</th>
                            <th>Stoarge Used</th>
                            <th>SU</th>
                            <th>SU Used</th>
                        </tr>
                        <tr>
                            <td>5 Gb</td>
                            <td>0 Gb</td>
                            <td>2100 SU</td>
                            <td>0 SU</td>
                        </tr>
                    </table>
                    <style>
                        table {
                            width: 500 px;
                        }
                        th, td {
                            padding: 7px 10px 10px 10px;
                        }
                        th {
                            text-transform: uppercase;
                            letter-spacing: 0.1em;
                            border-bottom: 2px solid #111111;
                            border-top: 1px solid #999;
                            text-align: left;
                        }
                        td {
                            background-color: #efefef;
                        }
                        td:hover{
                            background-color: silver;
                        }

                    </style>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../Assets/JS/menudrop.js"></script>
    <footer id="footer">
        <p>Check out our <a href="https://github.com/dpgraham4401/glitchycyborg">GitHub </a> for updates</p>
        <?php
        echo "Last Commit: ";
        system("git log -1 --format=%cd | awk '{print $1,$2,$3}'");
        ?>
    </footer>
</body>
</html>
