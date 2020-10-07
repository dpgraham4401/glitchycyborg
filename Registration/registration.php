<?php
    // $fname = htmlspecialchars($_POST['fname']);
    // $lname = htmlspecialchars($_POST['fname']);
    // $uname = htmlspecialchars($_POST['fname']);
    // $email = htmlspecialchars($_POST['fname']);
    // $psswd = htmlspecialchars($_POST['fname']);

    // echo $fname;
    // echo "file written successfully";

    require_once 'login.php';

    if ($_POST['psswd1'] != $_POST['psswd2'])
    {
        echo <<<_END
        <h3>Oops! passwords are not the same</h3>
        <a href="signup.php" > Try again </a>
        
        _END;
        die();
    }

    $conn = new mysqli($hn, $us, $pd, $db);
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    if (!empty($_POST['fname']) &&
        !empty($_POST['lname']) &&
        !empty($_POST['uname']) &&
        !empty($_POST['email']) &&
        !empty($_POST['psswd1']) &&
        !empty($_POST['psswd2'])
        )
    {

        // $query = "INSERT INTO users (first_name, last_name, user_name, email, password)" .
        // "VALUES ('$fname', '$lname', '$uname', '$email', '$psswd1');";
        // $results = $conn->query($query);
        // if (!$results) echo "Insert Failed<br><br>";

        $stmt = $conn->prepare('INSERT INTO 
            users(first_name, last_name, user_name, email, password) 
            VALUES(?,?,?,?,?)');
        $stmt->bind_param('sssss', $fname, $lname, $uname, $email, $psswd1);

        $fname = get_post($conn, 'fname');
        $lname = get_post($conn, 'lname');
        $uname = get_post($conn, 'uname');
        $email = get_post($conn, 'email');
        $psswd1 = get_post($conn, 'passwd1');
        $psswd2 = get_post($conn, 'passwd2');
        
        $stmt->execute();
        $stmt->close();
        $conn->close();

        header("Location: thanks.php");
        die();

    }

    function get_post($conn, $var)
    {
        return $conn->real_escape_string($_POST[$var]);
    }
?>