<?php 
    session_start();
    require_once '../functions.php';
    include_once "../validators/validators.php";
	require_once '../config-file.php';
    
    if ( isset($_REQUEST['delete']) ) {

        $rec_id = $_REQUEST['id'];
        $sql = "DELETE from reminders where rec_id='$rec_id'";
        $delete = deleteDataBase($sql);

        if ($delete) {
            header("Location: {$URL_PATH}index.php?success=4");
        }
        
        
    } else {    
        $sql = "SELECT * FROM reminders WHERE rec_id='{$_REQUEST['id']}' ";
        $result = selectDataBase($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                $rec_id = $row['rec_id'];
                $desc = $row['description'];
                $date = $row['fecha'];
                $time = $row['time'];
            }

            header("Location: {$URL_PATH}index.php?del=true&rec_id={$rec_id}&desc={$desc}&time={$time}&date={$date}");
            
        } else {
            echo "Disculpe ocurrio un error en la base de datos.";
        }
    }


?>