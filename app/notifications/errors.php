<?php 


    /*
    ** Error controler
    */ 
	function errorControler ( $type ){

        if ($type == 1) {
            $message = 'Por favor ingrese un usuario o contraseña validos.';
        } else if ($type == 2) {
            $message = 'Las contraseñas no coinciden.';
        } else if ($type == 3) {
            $message = 'Este usuario o correo ya estan utilizados';
        }

		$template = "
			<div class='alert danger'>
				<p class='alert__text'>
					{$message}
				</p>
			</div>
            ";
            
		return $template;
    }

?>