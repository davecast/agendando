<?php 
session_start();

if(isset($_REQUEST['addReminder'])){
    
    $corre = $_REQUEST['email'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];
    $description = $_REQUEST['description'];

    echo "{$corre} {$date} {$time} {$description}";
}
?>