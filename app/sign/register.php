<?php 
    session_start();
    require_once '../functions.php';

    if (isset($_REQUEST['btnSignUp'])) {
        $username = $_REQUEST['registerUsername'];
        $name = $_REQUEST['registerName'];
        $email = $_REQUEST['registerEmail'];
        $pass = $_REQUEST['registerPass'];
        $repass = $_REQUEST['registerRePass'];
        $avatar = "https://lorempixel.com/640/640/people/?". rand(1, 1000);
        $token = bin2hex(random_bytes(64));
        
            if ($pass == $repass) {
                $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
                $result = selectDataBase($sql);
                
                if ($result->num_rows > 0) {
                    $err = '3';
                    header("Location: http://localhost/agendando/index.php?err={$err}&type=signUp");
                } else {
                    
                    $pass = password_hash($pass, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (id_user, name, username, email, password, token, avatar) VALUES (NULL, '$name', '$username', '$email', '$pass', '$token', '$avatar')";
                    $result = insertDataBase($sql);

                    $_SESSION['id_user'] = $result;
                    $_SESSION['name'] = $name;
                    $_SESSION['username'] = $username; 	
                    $_SESSION['email'] = $email;	
                    $_SESSION['token'] = $token;
                    $_SESSION['avatar'] = $avatar;

                    header("Location: http://localhost/agendando/index.php");
                }
            } else {
                $err = '2';
                header("Location: http://localhost/agendando/index.php?err={$err}&type=signUp");
            }
        
    }

?>