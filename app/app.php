<?php 
	include_once 'components/header.php';
	include_once 'config/conection.php';
	include_once 'functions.php';
	include_once 'config-file.php';
	include_once 'utilities/utilities.php';
	include_once 'reminders/error.php';
	
	$actionUrl = "app/reminders/register.php";
	$btnText = "Guardar";
	$cancelUrl = "{$URL_PATH}index.php";

	if ( isset($_REQUEST['mod']) ) {
		$mod = $_REQUEST['mod'];
		$btnText = 'Modificar';
		$rec_id = $_REQUEST['rec_id'];
		$actionUrl = "app/reminders/modify.php?id={$rec_id}&update=true";
	} else {
		$mod = false;
	}
	
	if ( isset($_REQUEST['del']) ) {
		echo "";
		$del = $_REQUEST['del'];
		$btnText = 'Eliminar';
		$rec_id = $_REQUEST['rec_id'];
		$actionUrl = "app/reminders/delete.php?id={$rec_id}&delete=true";
	} else {
		$del = false;
	}
?>

<section class="section">
	<div class="container container--full">
		<div class="row">
			<div class="user__panel  <?php echo "mod-{$mod}"; echo " del-{$del}"; ?>">
				<div class="user__perfil">
					<div class="user__avatar">
						<figure class="user__figure">
							<img src="temp/perfil.jpg" alt="">
						</figure>
					</div>
					<div class="user__name">
						<?php echo $_SESSION['username']; ?>
					</div>
				</div>
				<div class="user__actions">
					
					<form id="formRegister" class="form row" action="<?php echo $actionUrl; ?>" method="post" novalidate autocomplete="off">
						<?php 
							if ( isset($_REQUEST['errDate']) ) {
								$errDate = ($_REQUEST['errDate'] == 1) ? "input--visible input--danger" : "input--visible input--warning";
								$dateMessage = errorRegister($_REQUEST['errDate']);
							} else {
								$errDate = "";
								$dateMessage = "";
							}
							if ( isset($_REQUEST['date']) ) {
								$date = $_REQUEST['date'];
							} else {
								$date = "";
							}
						?>
						<div class="col--12 m__b input__box">
							<input class="input input--inline <?php echo $errDate ?>" id="date" name="date" type="date" placeholder="Fecha" value="<?php echo $date; ?>" <?php echo ($del) ? "disabled" : "" ?> />
							<span>
								<?php echo $dateMessage; ?>
							</span>
						</div>
						<?php 
							if ( isset($_REQUEST['errTime']) ) {
								$errTime = ($_REQUEST['errTime'] == 1) ? "input--visible input--danger" : "input--visible input--warning";
								$timeMessage = errorRegister($_REQUEST['errTime']);
							} else {
								$errTime = "";
								$timeMessage = "";
							}
							if ( isset($_REQUEST['time']) ) {
								$time = $_REQUEST['time'];
							} else {
								$time = "";
							}
						?>
						<div class="col--12 m__b input__box">
							<input class="input input--inline <?php echo $errTime ?>" type="time" id="time" name="time" min="00:00" max="24:00" value="<?php echo $time; ?>" <?php echo ($del) ? "disabled" : "" ?> />
							<span><?php echo $timeMessage; ?></span>
						</div>
						<?php 
							if ( isset($_REQUEST['errDesc']) ) {
								$errDesc = ($_REQUEST['errDesc'] == 1) ? "input--visible input--danger" : "input--visible input--warning";
								$descMessage = errorRegister($_REQUEST['errDesc']);
							} else {
								$errDesc = "";
								$descMessage = "";
							}

							if ( isset($_REQUEST['desc']) ) {
								$desc = $_REQUEST['desc'];
							} else {
								$desc = "";
							}
						?>
						<div class="col--12 m__b input__box">
							<textarea class="input textarea input--inline <?php echo $errDesc ?>" name="description" id="description" cols="30" rows="7" placeholder="Descripción" <?php echo ($del) ? "disabled" : "" ?> ><?php echo $desc; ?></textarea>
							<span><?php echo $descMessage; ?></span>
						</div>
						<div class="col--12 t__c">
							<input type="submit" name="addReminder" value="<?php echo $btnText; ?>" class="btn btn--rojo btn--sm btn--normal--font">
						</div>
						<?php 
							if ( isset($_REQUEST['mod']) or isset($_REQUEST['del']) ) {
								$btnCancel = "<div class='col--12 t__c m__t'>
								<a  href='{$cancelUrl}' class='btn btn--rojo btn--sm btn--normal--font'>CANCELAR</a>
							</div>";
								echo $btnCancel;
							}
						?>
					</form>
				</div>
			</div>
			<div class="reminders__content <?php echo "mod-{$mod}"; echo " del-{$del}"; ?>">
				<?php 
					$sql = "SELECT * FROM reminders WHERE id_user={$_SESSION['id_user']}";
					$result = selectDataBase($sql);
					if ($result->num_rows > 0) {
						$contentHtml .= "<div class='reminders__container'>
							<ul class='reminders__list'>
								<div class='reminders__header'>
									<div class='reminders__description'>Descripción</div>
									<div class='reminders__date'>Fecha</div>
									<div class='reminders__time'>Hora</div>
									<div class='reminders__actions'>Acciones</div>
								</div>";
						while ($fila=mysqli_fetch_array($result)) {

							$dateTranspile = transpileDate($fila['fecha']);
							$timeTranspile = transpileTime($fila['time']);

							$contentHtml .= "<li class='reminder__list'>
									<div class='reminder__description'>
										{$fila['description']}	
									</div>
									<div class='reminder__date'>{$dateTranspile}</div>
									<div class='reminder__time'>{$timeTranspile}</div>
									<div class='reminder__actions'>
										<a href='app/reminders/modify.php?id={$fila['rec_id']}' class='reminder__modify'>
											<i class='fas fa-edit'></i>
										</a>
										<a href='app/reminders/delete.php?id={$fila['rec_id']}' class='reminder__delete'>
											<i class='fas fa-trash-alt'></i>
										</a>
									</div>
								</li>";
						}

						$contentHtml .= "</ul>
						</div>";
						echo $contentHtml;
					} else {
						$contentHtml = "<div class='reminders__not__found'>
							No se hacreado ningun recordatorio.
							</div>";
						echo $contentHtml;
					}
					?>
			</div>
		</div>
	</div>	
</section>
																					