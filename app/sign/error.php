<?php 

/*
** Error controler
*/ 
function errorSign ( $type ){
    $message = "";
    if ($type == 1) {
        $message = "Campo requerido";
    } else {
        $message = "Formato invalidos";
    }
        
    return $message;
}

?>