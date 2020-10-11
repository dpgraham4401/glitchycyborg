<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $us, $pd, $db);
    if ($conn->connect_error) die("Database connection failed: " . $conn->connect_error);

     if (!empty($_POST['uname']) &&
         !empty($_POST['psswd']))
     {
         $un_temp = mysql_ent_fix_string($conn, $_POST['uname']);
         $pw_temp = mysql_ent_fix_string($conn, $_POST['psswd']);
        //  echo htmlspecialchars("$un_temp");

         $qry = "SELECT * FROM users WHERE user_name = '$un_temp';";
         $results =$conn->query($qry);

         if (mysqli_num_rows($results)==0) die('User not found');
         elseif ($results->num_rows)
         {
            $row = $results->fetch_array(MYSQLI_NUM);

            $results->close();

             if (password_verify($pw_temp, $row[4]))
             {
                echo htmlspecialchars("$row[0] $row[1] :
                Hi $row[0], you are now logged in as '$row[2]'");
             }
             else die("Invalid username/password combination");
         }
         else die("Invalid username/password combination");
    }

    $conn->close();

    function mysql_ent_fix_string($conn, $string)
    {
        return htmlentities(mysql_fix_string($conn, $string));
    }

    function mysql_fix_string($conn, $string)
    {
        return $conn->real_escape_string($string);
    }
?>