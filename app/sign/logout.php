<?php
session_start();
session_unset(); 
session_destroy();

header('Location: http://localhost/agendando/index.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Pagina 3</title>
</head>
	<body>
		<p>Has Cerrado Sesion</p>
	</body>
</html>