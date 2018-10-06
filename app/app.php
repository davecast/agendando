<?php 
	include_once 'components/header.php';
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
						<div class="col--12 m__b input__box">
							<input class="input input--inline" id="email" name="email" type="email" placeholder="Correo">
							<span></span>
						</div>
						<div class="col--6 m__b input__box input__box--half input__box--first">
							<input class="input input--inline" id="date" name="date" type="date" placeholder="Fecha">
							<span></span>
						</div>
						<div class="col--6 m__b input__box input__box--half">
							<input class="input input--inline" id="time" name="time" type="text" placeholder="Hora">
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
				<div class="reminders__not__found">
					No se hacreado ningun recordatorio.
				</div>
				<div class="reminders__container">
					<div class="reminders__header">
						<div class="reminders__description">Descripción</div>
						<div class="reminders__date">Fecha</div>
						<div class="reminders__time">Hora</div>
						<div class="reminders__actions">Acciones</div>
					</div>
					<ul class="reminders__list">
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">
									<i class="fas fa-edit"></i>
								</div>
								<div class="reminder__delete">
									<i class="fas fa-trash-alt"></i>
								</div>
							</div>
						</li>
						<li class="reminder__list">
							<div class="reminder__description">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, laudantium quas? Distinctio quo totam ut quis adipisci sequi nostrum eius?
							</div>
							<div class="reminder__date">07/10/18</div>
							<div class="reminder__time">19:00</div>
							<div class="reminder__actions">
								<div class="reminder__modify">

								</div>
								<div class="reminder__delete">

								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
</section>