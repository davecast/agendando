<?php 

    /*
    ** Error controler
    */ 
	function errorRegister ( $type ){
        $message = "";
        if ($type == 1) {
            $message = "Campo requerido";
        } else {
            $message = "Formato invalidos";
        }
            
		return $message;
    }
?>