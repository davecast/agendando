<?php 
    include_once 'app/notifications/errors.php';
?>
<div id="banner" class="sign__container">
    <div class="row">
        <div class="col--12">
            <div class="account__tabs">
                <div id="tab_signin" data-tab="signIn" class="account__tab account__tab--active">
                    Iniciar sesión
                </div>
                <div id="tab_signup" data-tab="signUp" class="account__tab">
                    Registrate
                </div>
            </div>
        </div>
    </div>
    <div class="account__contents">
        <div class="row">
            <div class="col--12">
                <div id="signIn" class="account__content account__active">
                    <?php
                        if (isset($_REQUEST['err']) and $_REQUEST['type']=="signIn") {
                            echo errorControler($_REQUEST['err']);
                        }
                    ?>
                    <div class="modal-content">
                        <form id="form-signin" class="form row" action="app/sign/login.php" method="post" novalidate autocomplete="off">
                            <div class="col--12 m__b input__box">
                                <input class="input input--inline" id="Username" name="Username" type="text" placeholder="Usuario">
                                <span></span>
                            </div>
                            <div class="col--12 m__b input__box">
                                <input class="input input--inline" id="Password" name="Password" type="password" placeholder="Contraseña">
                                <span></span>
                            </div>
                            <div class="col--12 t__c">
                                <input type="submit" name="btnSignIn" value="Entrar" class="btn btn--rojo btn--sm btn--normal--font">
                            </div>
                        </form>	
                    </div>              
                </div>
                <div id="signUp" class="account__content">
                    <?php
                        if (isset($_REQUEST['err']) and $_REQUEST['type']=="signUp" ) {
                            echo errorControler($_REQUEST['err']);
                        }
                    ?>
                    <div class="modal-content">
                        <form id="form-signup" class="form row" action="app/sign/register.php" method="post" novalidate autocomplete="off">
                            <div class="col--6 m__b input__box input__box--half input__box--first">
                                <input class="input input--inline" id="registerUsername" name="registerUsername" type="text" placeholder="Usuario" value="">
                                <span></span>
                            </div>
                            <div class="col--6 m__b input__box input__box--half">
                                <input class="input input--inline" id="registerName" name="registerName" type="text" placeholder="Nombre completo">
                                <span></span>
                            </div>
                            <div class="col--12 m__b input__box input__box--file">
                                <input class="input__file" id="registerAvatar" name="registerAvatar" type="file">
                                <label for="registerAvatar" class="label__file">Sube tu imagen de perfil es opcional</label>
                            </div>
                            <div class="col--12 m__b input__box">
                                <input class="input input--inline" id="registerEmail" name="registerEmail" type="email" placeholder="correo@correo.com">
                                <span></span>
                            </div>
                            <div class="col--12 m__b input__box">
                                <input class="input input--inline" id="registerPass" name="registerPass" type="password" placeholder="Contraseña">
                                <span></span>
                            </div>
                            <div class="col--12 m__b input__box">
                                <input class="input input--inline" id="registerRePass" name="registerRePass" type="password" placeholder="RepitaContraseña">
                                <span></span>
                            </div>
                            <div class="col--12 t__c">
                                <input type="submit" name="btnSignUp"" value="Crear" class="btn btn--rojo btn--sm btn--normal--font">
                            </div>
                        </form>	
                    </div>	
                </div>
            </div>
        </div>
    </div>
</div>