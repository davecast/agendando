<?php 
	include_once 'components/header.php';
	include_once 'config/conection.php';
	include_once 'functions.php';
	include_once 'utilities/utilities.php';

?>

<section class="section">
	<div class="container container--full">
		<div class="row">
			<div class="user__panel">
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
					<form id="form-signin" class="form row" action="app/reminders/register.php" method="post" novalidate autocomplete="off">
						<div class="col--6 m__b input__box">
							<input class="input input--inline" id="date" name="date" type="date" placeholder="Fecha">
							<span></span>
						</div>
						<?php 
							if ( isset($_REQUEST) ) {
								echo $_REQUEST['errDesc'];
							}
						?>
						<div class="col--6 m__b input__box">
							<input class="input input--inline" type="time" id="time" name="time" min="00:00" max="24:00"  />
							<span></span>
						</div>
						<div class="col--12 m__b input__box">
							<textarea class="input textarea input--inline" name="description" id="description" cols="30" rows="7" placeholder="Descripción"></textarea>
							<span></span>
						</div>
						<div class="col--12 t__c">
							<input type="submit" name="addReminder" value="Guardar" class="btn btn--rojo btn--sm btn--normal--font">
						</div>
					</form>
				</div>
			</div>
			<div class="reminders__content">
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
										<a href='app/modify/modify.php?id={$fila['rec_id']}' class='reminder__modify'>
											<i class='fas fa-edit'></i>
										</a>
										<a href='app/delete/delete.php?id={$fila['rec_id']}' class='reminder__delete'>
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
																					