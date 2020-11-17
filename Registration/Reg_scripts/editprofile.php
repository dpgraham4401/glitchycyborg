<?php

function edit_password()
{
    if (!empty($_POST['old_passwd']) &&
        !empty($_POST['new_psswd1']) &&
        !empty($_POST['new_psswd2']))
        {

            
            require_once "login.php";
            $conn = new mysqli($hn, $un, $pd, $db);
            if ($conn->connect_error) die("fatal error");
        
            // $query = "UPDATE test SET uname=$_POST['new_uname'] WHERE id = $_SESSION['id']";
        }

}


?>
