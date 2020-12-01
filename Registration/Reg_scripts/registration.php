<?php
    require_once 'login.php';

    if (empty($_POST['fname']) ||
        empty($_POST['lname']) ||
        empty($_POST['uname']) ||
        empty($_POST['email']) ||
        empty($_POST['psswd1']) ||
        empty($_POST['psswd2']) )
    {
        echo <<<_END
        <h3>Oops! Something was left blank</h3>
        <a href="signup.php" > Try again </a>
        
        _END; 
        die();
    }
    elseif (preg_match('/[\'!^£$%&*(){}[]@#~?><>`,.|=_+¬-]+/', $_POST['uname'], $matches))
    {
        echo <<<_END
        <h3>Oops! Special Character encountered in submitted username </h3>
        <a href="signup.php" > Try again </a>
        
        _END; 
        die();
    }
    elseif (strlen($_POST['uname'])<4 || strlen($_POST['psswd1']) < 8)
    {
        echo <<<_END
        <h3>Oops! username must be at least 4 characters<br> Passwords must be 8 characters long</h3>
        <a href="signup.php" > Try again </a>
        
        _END; 
        die();
    }
    elseif ($_POST['psswd1'] != $_POST['psswd2'])
    {
        echo <<<_END
        <h3>Oops! passwords are not the same</h3>
        <a href="signup.php" > Try again </a>
        
        _END; 
        die();
    }
    elseif (!(preg_match('/[A-Z]+/', $_POST['psswd1'], $matches)) ||
            !(preg_match('/[a-z]+/', $_POST['psswd1'], $matches)) ||
            !(preg_match('/[0-9]+/', $_POST['psswd1'], $matches)))
        {
            echo <<<_END
            <h3>Oops! Password requires at least 8 character, 1 Upper, 1 lower, 1 number </h3>
            <a href="signup.php" > Try again </a>
            
            _END; 
            die();
        }
    else
    {
        $conn = new mysqli($hn, $us, $pd, $db);
        if ($conn->connect_error) 
        {
            die("Database connection failed: " . $conn->connect_error);
        }
    
        // if (!empty($_POST['fname']) &&
        //     !empty($_POST['lname']) &&
        //     !empty($_POST['uname']) &&
        //     !empty($_POST['email']) &&
        //     !empty($_POST['psswd1']) &&
        //     !empty($_POST['psswd2'])
        //     )
    
            // $query = "INSERT INTO users (first_name, last_name, user_name, email, password)" .
            // "VALUES ('$fname', '$lname', '$uname', '$email', '$psswd1');";
            // $results = $conn->query($query);
            // if (!$results) echo "Insert Failed<br><br>";
    
            $stmt = $conn->prepare('INSERT INTO 
                users(first_name, last_name, user_name, email, password) 
                VALUES(?,?,?,?,?)');
            $stmt->bind_param('sssss', $fname, $lname, $uname, $email, $hash);
    
            $fname = get_post($conn, 'fname');
            $lname = get_post($conn, 'lname');
            $uname = get_post($conn, 'uname');
            $email = get_post($conn, 'email');
            $psswd1 = $_POST['psswd1'];
            
            // $psswd1 = get_post($conn, 'passwd1');
            $hash = password_hash($psswd1, PASSWORD_DEFAULT);
            
            $stmt->execute();
            $stmt->close();
            $conn->close();
    
            header("Location: ../thanks.php");
            die();

    }

    function get_post($conn, $var)
    {
        return $conn->real_escape_string($_POST[$var]);
    }

?>