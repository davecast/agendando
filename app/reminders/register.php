<?php 
session_start();
include_once "../functions.php";
include_once "../validators/validators.php";
include_once "../config-file.php";

if(isset($_REQUEST['addReminder'])){
    
    $err = 0;
    $url = "{$URL_PATH}index.php?";

    if ( isset($_REQUEST['date'])) {
        $dateIsset = false;
        if (validateDate($_REQUEST['date'])) {
            $date = $_REQUEST['date'];
            $url .="&date={$date}";
        } else {
            $err = 2;
            $url .= "&errDate={$err}";
        }
    } else {
        $err = 1;
        $url .= "&errDate={$err}";
    }
    
    if ( isset($_REQUEST['time']) ) {
        $timeIsset = false;
        if (validateTime($_REQUEST['time'])) {
            $time = $_REQUEST['time'];
            $url .= "&time={$time}";
        } else {
            $err = 2;
            $url .= "&errTime={$err}";
        }
    } else {
        $err = 1;
        $url .= "&errTime={$err}";
    }   
    
    if ( isset($_REQUEST['description']) and strlen($_REQUEST['description']) != 0 ) {
        $descriptionIsset = false;
        if (validateDescription($_REQUEST['description'])) {
            $description = $_REQUEST['description'];
            $url .= "&desc={$description}";
        } else {
            $err = 2;
            $url .= "&errTime={$err}";
        }
    } else {
        $err = 1;
        $url .= "&errDesc={$err}";
    }

    if ($err == 0) {
        $id_user = $_SESSION['id_user'];

        $sql = "INSERT INTO reminders (rec_id, description, fecha, time, id_user) VALUES (NULL, '$description', '$date', '$time', '$id_user')";
        $result = insertDataBase($sql);
        
        header("Location: {$URL_PATH}index.php?&success=2");
    } else {
        echo $url;
        header("Location: {$url}");
    }
}
?>