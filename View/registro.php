<?php require_once("View/Template/header.php") ?>
<div class="bloqueLogin">
    <div class="bannerRegistro">
        <img class="" src="<?php echo BASE_URL; ?>Assets/img/registro.svg" alt="" height="720">
        <p class="beneficioTitulo1">¡Bienvenid@!</p>
        <p class="textoLoginIzquierda">Es momento de crear y aportar. Inicia sesión y comienza a conectar con nuevas oportunidades.</p>
    </div>
    <div class="formLogin">
        <p class="formLoginTitulo">Registrate</p>
        <div class="linkRegistrarse">
            <p>Bienvenida</p>
        </div>
        <form action="" method="post" id="frmRegistro">
            <div class="inputsRegistro">
                <div class="grupoInputsRegistro">
                    <input type="text" class="form-control inputFormularioRegistro" placeholder="Primer Nombre" id="nombre" name="primer_nombre" required max="20">
                    <input type="text" class="form-control inputFormularioRegistro" placeholder="Primer Apellido" id="apellido" name="primer_apellido" required max="20">
                </div>
                <div class="grupoInputsRegistro">
                    <input type="email" class="form-control inputFormularioRegistro" placeholder="Email" id="correo" name="correo" required max="40">
                    <input type="text" class="form-control inputFormularioRegistro" placeholder="Direccion" id="direccion" name="direccion" required>
                </div>                
            </div>
                <div class="grupoInputsRegistro">
                    <div class="grupoInputsRegistroSimbolo">
                        <span class="input-group-text">Pais</span>
                        <select name="pais" id="pais" class="form-control"  onclick="listarCiudad();" >
                        </select>
                    </div>
                    <div class="grupoInputsRegistroSimbolo" style="margin-left: 0.5vh;">
                        <span class="input-group-text">Ciudad</span>
                        <select name="ciudad" id="ciudad" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="grupoInputsRegistro">
                    <input type="password" class="form-control inputFormularioRegistro" placeholder="Contraseña" id="password" name="password" required max="15">
                    <input type="password" class="form-control inputFormularioRegistro" placeholder="Confirmar Contraseña" id="passwordConf" name="passwordConf" required max="15">
                </div>
                <input type="checkbox" name="recordarme" id="terminos" name="terminos" class="formInputCheck">
                <label class="recordarme" for="terminos">Acepto terminos y condiciones de TFI</label>
            <button type="button" class="botonFormRegistro mt-5 " onclick="frmRegistro()">Enviar</button>
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