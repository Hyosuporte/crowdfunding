<?php require_once("View/Template/header.php") ?>

<div class="bloqueLogin">
    <div style="margin-right: 5%; display:flex;">
        <img src="<?php echo BASE_URL; ?>Assets/img/imagenLogin.svg" alt="">
        <p class="beneficioTitulo1">Titulo</p>
        <p class="textoLoginIzquierda">Es momento de crear y aportar. Inicia sesión y comienza a conectar con nuevas oportunidades.</p>
    </div>
    <div class="formLogin">
        <p class="formLoginTitulo">Iniciar Sesión</p>
        <div class="linkRegistrarse">
            <p>¿Aún no tienes una cuenta? <a href="<?php echo BASE_URL; ?>Home/registro/">REGISTRATE</a></p>
        </div>
        <form action="" id="frmLogin">
            <input type="text" placeholder="Email" class="formLoginInput" id="email" name="email">
            <input type="password" placeholder="Contraseña" class="formLoginInput" id="password" name="password">
            <div class="mt-3">
                <input type="checkbox" name="recordarme" id="recordarme" class="formInputCheck">
                <label for="recordamer">Recordarme</label>
                <a href="<?php echo BASE_URL; ?>Home/recuperar" class="olvidoContrasena">Olvide mi contraseña</a>
            </div>
            <button type="button" class="botonCardDestacado mt-5" onclick="frmLogin()">Enviar</button>
        </form>
        <a href="/crowdfunding/View/cliente/perfil.php">Cliente</a>
    </div>
</div>
<!-- Cambio de emergencia --->
<?php require_once("View/Template/footer.php") ?>
<script src="<?php echo BASE_URL; ?>Assets/js/login.js"></script>
</body>

</html>