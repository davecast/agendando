<?php 
    include_once 'app/notifications/errors.php';
	include_once 'app/sign/error.php';
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
                            <?php 
                                if ( isset($_REQUEST['errUsername']) ) {
                                    $errUsername = ($_REQUEST['errUsername'] == 1) ? "input--visible input--danger" : "input--visible input--warning";
                                    $usernameMessage = errorSign($_REQUEST['errUsername']);
                                } else {
                                    $errUsername = "";
                                    $usernameMessage = "";
                                }
                                if ( isset($_REQUEST['username']) ) {
                                    $username = $_REQUEST['username'];
                                } else {
                                    $username = "";
                                }
                            ?>
                            <div class="col--6 m__b input__box input__box--half input__box--first">
                                <input value="<?php echo $username; ?>" class="input input--inline <?php echo $errUsername; ?>" id="registerUsername" name="registerUsername" type="text" placeholder="Usuario" >
                                <span><?php echo $usernameMessage; ?></span>
                            </div>
                            <?php 
                                if ( isset($_REQUEST['errName']) ) {
                                    $errName = ($_REQUEST['errName'] == 1) ? "input--visible input--danger" : "input--visible input--warning";
                                    $nameMessage = errorSign($_REQUEST['errName']);
                                } else {
                                    $errName = "";
                                    $nameMessage = "";
                                }
                                if ( isset($_REQUEST['name']) ) {
                                    $name = $_REQUEST['name'];
                                } else {
                                    $name = "";
                                }
                            ?>
                            <div class="col--6 m__b input__box input__box--half">
                                <input value="<?php echo $name; ?>" class="input input--inline  <?php echo $errName; ?>" id="registerName" name="registerName" type="text" placeholder="Nombre completo">
                                <span><?php echo $nameMessage; ?></span>
                            </div>
                            <?php 
                                if ( isset($_REQUEST['errEmail']) ) {
                                    $errEmail = ($_REQUEST['errEmail'] == 1) ? "input--visible input--danger" : "input--visible input--warning";
                                    $emailMessage = errorSign($_REQUEST['errEmail']);
                                } else {
                                    $errEmail = "";
                                    $emailMessage = "";
                                }
                                if ( isset($_REQUEST['email']) ) {
                                    $email = $_REQUEST['email'];
                                } else {
                                    $email = "";
                                }
                            ?>
                            <div class="col--12 m__b input__box">
                                <input value="<?php echo $email; ?>"  class="input input--inline  <?php echo $errEmail; ?>" id="registerEmail" name="registerEmail" type="email" placeholder="correo@correo.com">
                                <span><?php echo $emailMessage; ?></span>
                            </div>
                            <?php 
                                if ( isset($_REQUEST['errPass']) ) {
                                    $errPass = ($_REQUEST['errPass'] == 1) ? "input--visible input--danger" : "input--visible input--warning";
                                    $passMessage = errorSign($_REQUEST['errPass']);
                                } else {
                                    $errPass = "";
                                    $passMessage = "";
                                }
                            ?>
                            <div class="col--12 m__b input__box">
                                <input class="input input--inline <?php echo $errPass; ?>" id="registerPass" name="registerPass" type="password" placeholder="Contraseña">
                                <span><?php echo $passMessage; ?></span>
                            </div>
                            <?php 
                                if ( isset($_REQUEST['errRePass']) ) {
                                    $errRePass = ($_REQUEST['errRePass'] == 1) ? "input--visible input--danger" : "input--visible input--warning";
                                    $repassMessage = errorSign($_REQUEST['errRePass']);
                                } else {
                                    $errRePass = "";
                                    $repassMessage = "";
                                }
                            ?>
                            <div class="col--12 m__b input__box">
                                <input class="input input--inline <?php echo $errRePass; ?>" id="registerRePass" name="registerRePass" type="password" placeholder="RepitaContraseña">
                                <span><?php echo $repassMessage; ?></span>
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