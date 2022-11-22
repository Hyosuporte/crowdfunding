<?php require_once("View/Template/header.php") ?>
<div class="bloqueLogin">
    <div style="margin-right: 5%; display:flex;">
        <img src="<?php echo BASE_URL; ?>Assets/img/imagenLogin.svg" alt="">
        <p class="textoLoginIzquierda">Es momento de crear y aportar. Inicia sesión y comienza a conectar con nuevas oportunidades.</p>
    </div>
    <div class="formLogin">
        <p class="formLoginTitulo">Registrate</p>
        <div class="linkRegistrarse">
            <p>Bienvenida</p>
        </div>
        <form action="" method="post" id="frmRegistro">
            <div class="inputsRegistro">
                <input type="text" class="form-control inputFormularioRegistrar" placeholder="Nombre Completo" id="nombre" name="nombre" required max="20">
                <input type="email" class="form-control inputFormularioRegistrar" placeholder="Email" id="correo" name="correo" required max="40">
                <div style="display: flex;">
                    <input type="password" class="form-control inputFormularioRegistrarGrupo" placeholder="Contraseña" id="password" name="password" required max="15">
                    <input type="password" class="form-control inputFormularioRegistrarGrupo" placeholder="Confirmar Contraseña" id="passwordConf" name="passwordConf" required max="15">
                </div>
                <input type="checkbox" name="recordarme" id="terminos" name="terminos" class="formInputCheck">
                <label for="terminos">Acepto terminos y condiciones de TFI</label>
            </div>
            <button type="button" class="botonCardDestacado mt-5" onclick="frmRegistro()">Enviar</button>
            <div class="linkRegistrarse">
                <p>¿Ya tienes una cuenta? <a href="<?php echo BASE_URL; ?>Home/login/">INICIA SESIÓN</a></p>
            </div>
        </form>
    </div>
</div>
<?php require_once("View/Template/footer.php") ?>
<script src="<?php echo BASE_URL; ?>Assets/js/login.js"></script>
</body>

</html>