<?php 
    session_start();
    require_once '../functions.php';
    include_once "../validators/validators.php";
	require_once '../config-file.php';
    
    if ( isset($_REQUEST['update']) ) {
        
        $rec_id = $_REQUEST['id'];
        
        $err = 0;
        $url = "{$URL_PATH}index.php?mod=true&rec_id={$rec_id}";
        
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
            $update = updateDataBase("UPDATE reminders SET description = '$description', fecha = '$date', time = '$time' WHERE rec_id = $rec_id");
            
            if ($update) {
                header("Location: {$URL_PATH}index.php?success=3");
            }
        } else {
            echo $url;
            header("Location: {$url}");
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

            header("Location: {$URL_PATH}index.php?mod=true&rec_id={$rec_id}&desc={$desc}&time={$time}&date={$date}");
            
        } else {
            echo "Disculpe ocurrio un error en la base de datos.";
        }
    }

?>