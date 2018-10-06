<?php 
    
	require_once 'config/conection.php';
    
    /*
    ** UPDATE TO DATABASE
    */
	function updateDataBase ($sql){
        $conect = conection();
        
		if ($conect->query($sql) === TRUE) {    
            $conect->close();
            return 'Actuaizado el dato';
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

        $result = $conect->query($sql) or die ( "<br>No se puede ejecutar query para seleccionar datos ". $mysqli->error );

        $conect->close();
        return $result;
    }
    
    /*
    ** INSERT TO DATABASE
    */
	function insertDataBase ($sql) {
        $conect = conection();

        $conect->query($sql) or die ( "<br>No se puede ejecutar query para insertar datos ". $mysqli->error );

        $id = $conect->insert_id;
        
        $conect->close();

        return $id;
    }
?>