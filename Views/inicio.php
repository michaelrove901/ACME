<?php session_destroy() ?>

<link rel="stylesheet" type="text/css" href="<?= url ?>Resources/Css/inicio.css" />

<div class="container-fluid">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <h2>Login ACME</h2>
            <div class="fadeIn first">

                <img src="https://img.icons8.com/bubbles/100/000000/user.png" width="110px" height="110px" />
            </div>

            <!-- Login Form -->
            <form action="<?= url ?>usuario/login" method="POST">
                <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuario">
                <input type="text" id="password" class="fadeIn third" name="clave" placeholder="Contraseña">
                <input type="submit" class="fadeIn fourth" value="Aceptar" id="aceptar">
            </form>



        </div>

        <div class="col-sm-5 alert">

            <?php if (isset($_GET['validar'])) { ?>
                <div class="alert alert-danger">
                    <p>
                        <center>
                            <strong><?= $_GET['validar'] ?></strong>
                        </center>
                </div>
            <?php } ?>
        </div>
    </div>
</div>