<?php
    session_start();
    require_once '../functions.php';

    if(isset($_REQUEST['btnSignIn'])){
        
        $sql = "SELECT * FROM users WHERE username='{$_REQUEST['Username']}' ";
        $result = selectDataBase($sql);

		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				$passwordU = $row['password'];
				$id_user = $row['id_user'];
				$name = $row['name'];
				$username = $row['username'];
				$email = $row['email'];
				$avatar = $row['avatar'];
				$token = $row['token'];
			}

			if (password_verify($_REQUEST['Password'], $passwordU)) {
				$_SESSION['id_user'] = $id_user;
				$_SESSION['name'] = $name;
				$_SESSION['username'] = $username; 	
				$_SESSION['email'] = $email;	
				$_SESSION['token'] = (strlen($token) > 0 ) ? $token : bin2hex(random_bytes(64)) ;
				$_SESSION['avatar'] = $avatar;
                
                if (strlen($token) == 0) {
					updateDataBase("UPDATE users SET token='{$_SESSION['token']}' WHERE id_user={$id_user}");
				}

				header("Location: http://localhost/agendando/index.php");
			} else {
				$err = '1';
				header("Location: http://localhost/agendando/index.php?err={$err}&type=signIn");
			}
		} else {
			$err = '1';
			header("Location: http://localhost/agendando/index.php?err={$err}&type=signIn");
		}
	} else {
		if(isset($_SESSION['token'])){
			header("Location: index.php");
		} else {
			header("Location: index.php");
		}
	}

/*
	

	
	
*/
?>