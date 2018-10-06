<?php 
    session_start();
    require_once '../functions.php';
    include_once "../validators/validators.php";
    require_once '../config-file.php';

    if (isset($_REQUEST['btnSignUp'])) {
        
        $err = 0;
        $url = "{$URL_PATH}index.php?type=signUp";
        
        if (isset( $_REQUEST['registerUsername']) and strlen($_REQUEST['registerUsername']) != 0 ) {
            $usernameIsset = false;
            if (validateAlfaNumeric($_REQUEST['registerUsername'])) {
                $username = $_REQUEST['registerUsername'];
                $url .="&username={$username}";
            } else {
                $err = 2;
                $url .= "&errUsername={$err}";
            }
        } else {
            $err = 1;
            $url .= "&errUsername={$err}";
        }
        
        if ( isset($_REQUEST['registerName']) and strlen($_REQUEST['registerName']) != 0 ) {
            $nameIsset = false;
            if (validateAlfaEsp($_REQUEST['registerName'])) {
                $name = $_REQUEST['registerName'];
                $url .= "&name={$name}";
            } else {
                $err = 2;
                $url .= "&errName={$err}";
            }
        } else {
            $err = 1;
            $url .= "&errName={$err}";
        }   
        
        if ( isset($_REQUEST['registerEmail']) and strlen($_REQUEST['registerEmail']) != 0 ) {
            $emailIsset = false;
            if (validateEmail($_REQUEST['registerEmail'])) {
                $email = $_REQUEST['registerEmail'];
                $url .= "&email={$email}";
            } else {
                $err = 2;
                $url .= "&errEmail={$err}";
            }
        } else {
            $err = 1;
            $url .= "&errEmail={$err}";
        }

        if ( isset($_REQUEST['registerPass']) and strlen($_REQUEST['registerPass']) != 0 ) {
            $passIsset = false;
            
            $pass = $_REQUEST['registerPass'];
        } else {
            $err = 1;
            $url .= "&errPass={$err}";
        }


        if ( isset($_REQUEST['registerRePass']) and strlen($_REQUEST['registerRePass']) != 0 ) {
            $repassIsset = false;
            
            $repass = $_REQUEST['registerRePass'];
        } else {
            $err = 1;
            $url .= "&errRePass={$err}";
        }

        
        if ($err == 0) {
            
            // $name = $_REQUEST[''];
            // $email = $_REQUEST['registerEmail'];
            // $pass = $_REQUEST['registerPass'];
            // $repass = $_REQUEST['registerRePass'];
            // $avatar = "https://lorempixel.com/640/640/people/?". rand(1, 1000);
            // $token = bin2hex(random_bytes(64));
            
            // if ($pass == $repass) {
            //     $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            //     $result = selectDataBase($sql);
                
            //     if ($result->num_rows > 0) {
            //         $err = '3';
            //         header("Location: {$URL_PATH}index.php?err={$err}&type=signUp");
            //     } else {
                    
            //         $pass = password_hash($pass, PASSWORD_DEFAULT);
            //         $sql = "INSERT INTO users (id_user, name, username, email, password, token, avatar) VALUES (NULL, '$name', '$username', '$email', '$pass', '$token', '$avatar')";
            //         $result = insertDataBase($sql);

            //         $_SESSION['id_user'] = $result;
            //         $_SESSION['name'] = $name;
            //         $_SESSION['username'] = $username; 	
            //         $_SESSION['email'] = $email;	
            //         $_SESSION['token'] = $token;
            //         $_SESSION['avatar'] = $avatar;

            //         header("Location: {$URL_PATH}index.php");
            //     }
            // } else {
            //     $err = '2';
            //     header("Location: {$URL_PATH}index.php?err={$err}&type=signUp");
            // }
            
        } else {
            echo $url;
            header("Location: {$url}");
        }

        
    }

?>