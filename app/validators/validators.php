<?php 

    
    function validateDate ($date) {
        $tempDate=date("Y-m-d",strtotime($date));
        
        if ( $tempDate == '1970-01-01' )
        {
            if ( $tempDate == $date )
            {
                $validate = true;
            }
            else
            {
                $validate = false;
            }
        }
        else
        {
            $arrayDate = explode("-", $tempDate, 3);
            $year = $arrayDate[0];
            $moth = $arrayDate[1];
            $day = $arrayDate[2];

            $validate=checkdate($moth,$day,$year);
        }

        return $validate;
    }
    function validateTime ($time) {
        return preg_match("/(2[0-3]|[0][0-9]|1[0-9]):([0-5][0-9])/", $time);
    }
    function validateDescription ($str) {
        return preg_match("/^[a-z0-9ñÑáéíóúÁÉÍÓÚ \.\,]*$/i", $str );
    }
    function validateEmail ($email) {
        return preg_match("^([a-z0-9_-])+([\.a-z0-9_-])*@([a-z0-9-])+(\.[a-z0-9-]+)*\.([a-z]{2,6})$", $email);
    }
    function validateAlfaNumeric ($text) {
        return preg_match("/^[a-zñÑ0-9]*$/i", $text );
    }
    function validateAlfaEsp ($text) {
       return preg_match("/^[a-zñÑáéíóúÁÉÍÓÚ ]*$/i", $text );
    }
?>