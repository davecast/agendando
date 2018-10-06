<?php 
session_start();
include_once "../validators/validators.php";
include_once "../config-file.php";

if(isset($_REQUEST['addReminder'])){
    
    $err = 0;
    $url = "{$URL_PATH}index.php?";

    if ( isset($_REQUEST['date'])) {
        $dateIsset = false;
        if (validateDate($_REQUEST['date'])) {
            $date = $_REQUEST['date'];
        } else {
            $err = 2;
            $dateValidate = true;
        }
    } else {
        $err = 1;
        $url .= "&errDate={$err}";
    }
    
    if ( isset($_REQUEST['time']) ) {
        $timeIsset = false;
        if (validateTime($_REQUEST['time'])) {

            $time = $_REQUEST['time'];
        } else {
            $err = 2;
            $timeValidate = true;
        }
    } else {
        $err = 1;
        $url .= "&errTime={$err}";
    }   
    
    if ( isset($_REQUEST['description']) and strlen($_REQUEST['description']) != 0 ) {
        $descriptionIsset = false;
        if (validateDescription($_REQUEST['description'])) {
            $description = $_REQUEST['description'];
        } else {
            $err = 2;
            $descriptionValidate = true;
        }
    } else {
        $err = 1;
        $url .= "&errDesc={$err}";
    }

    if ($err == 0) {
        echo "Logrado no hay errores";
    } else {
        echo $url;
        header("Location: {$url}");
    }
}
?>