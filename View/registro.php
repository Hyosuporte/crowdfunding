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
                <input type="text" class="form-control" placeholder="Primer Nombre" id="nombre" name="primer_nombre" required max="20">
                <input type="text" class="form-control" placeholder="Primer Apellido" id="apellido" name="primer_apellido" required max="20">
                <input type="email" class="form-control" placeholder="Email" id="correo" name="correo" required max="40">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Direccion" id="direccion" name="direccion" required>
                </div>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Pais</span>
                <select name="pais" id="pais" class="form-control" style="margin-right: 13rem; border-radius: 10px;"  onclick="listarCiudad();" >
                </select>

                <div class="input-group mb-3">
                    <span class="input-group-text">Ciudad</span>
                    <select name="ciudad" id="ciudad" class="form-control" style="margin-right: 13rem;" >
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"></span>
                    <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" required max="15">
                    <input type="password" class="form-control" placeholder="Confirmar Contraseña" id="passwordConf" name="passwordConf" required max="15">
                </div>
                <input type="checkbox" name="recordarme" id="terminos" name="terminos" class="formInputCheck">
                <label for="terminos">Acepto terminos y condiciones de TFI</label>
            </div>
            <button type="button" class="botonCardDestacado mt-5" onclick="frmRegistro()">Llamado acción</button>
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