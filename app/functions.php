<?php 
    
	require_once 'config/conection.php';
    
    /*
    ** UPDATE TO DATABASE
    */
	function updateDataBase ($sql){
        $conect = conection();
        
		if ($conect->query($sql) === TRUE) {    
            $conect->close();
            return true;
		} else {
            $conect->close();
            return "Error {$conect->error}";
        }        
    }
    
    /*
    ** SELECT TO DATABASE
    */
	function selectDataBase ($sql) {
        $conect = conection();
        $conect->set_charset("utf8");
        
        $error = $conect->error;
        $result = $conect->query($sql) or die ( "<br>No se puede ejecutar query para seleccionar datos {$error}");

        $conect->close();
        return $result;
    }
    
    /*
    ** INSERT TO DATABASE
    */
	function insertDataBase ($sql) {
        $conect = conection();

        $conect->query($sql) or die ( "<br>No se puede ejecutar query para insertar datos ". $conect->error );

        $id = $conect->insert_id;
        
        $conect->close();

        return $id;
    }

    /*
    ** INSERT TO DATABASE
    */
	function deleteDataBase ($sql) {
        $conect = conection();

        $result = $conect->query($sql) or die ( "<br>No se puede ejecutar query para eliminar datos". $conect->error);

        if ($result === TRUE) {    
            $conect->close();
            return true;
		} else {
            $conect->close();
            return "Error {$conect->error}";
        }
    }
?>
