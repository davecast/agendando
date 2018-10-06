<?php 


    /*
    ** Warning controler
    */ 
	function warningControler ( $type ){

        if ($type == 1) {
            $message = 'Las contraseñas no coinciden.';
        } 

		$template = "
			<div class='alert warning'>
				<p class='alert__text'>
					{$message}
				</p>
			</div>
            ";
            
		return $template;
    }

?>