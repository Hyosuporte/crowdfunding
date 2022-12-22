<?php require_once("View/Template/header.php") ?>
<div class="bloqueLogin">
        <div class="bannerRegistro">
            <img class="" src="<?php echo BASE_URL; ?>Assets/img/registro.svg" alt="" height="720">
            <p class="beneficioTitulo1">¡Bienvenid@!</p>
            <p class="textoLoginIzquierda">Es momento de crear y aportar. Inicia sesión y comienza a conectar <br> con nuevas
                oportunidades.</p>
        </div>
        <div class="formLogin">
            <p class="formLoginTitulo">Registrate</p>
            <div class="linkRegistrarse">
                <p class="subtitulo">Bienvenida</p>
            </div>
            <form action="" method="post" id="frmRegistro">
                <div class="inputsRegistro">
                    <div class="grupoInputsRegistro">
                        <input type="text" class="form-control inputFormularioRegistro" placeholder="Primer Nombre"
                            id="nombre" name="primer_nombre" required max="20">
                        <input type="text" class="form-control inputFormularioRegistro" placeholder="Primer Apellido"
                            id="apellido" name="primer_apellido" required max="20">
                    </div>
                    <div class="grupoInputsRegistro">
                        <input type="email" class="form-control inputFormularioRegistro" placeholder="Email" id="correo"
                            name="correo" required max="40">
                        <input type="text" class="form-control inputFormularioRegistro" placeholder="Direccion"
                            id="direccion" name="direccion" required>
                    </div>
                </div>
                <div class="grupoInputsRegistro">
                    <div class="grupoInputsRegistroSimbolo">
                        <span class="input-group-text">Pais</span>
                        <select name="pais" id="pais" class="form-control" onclick="listarCiudad();">
                        </select>
                    </div>
                    <div class="grupoInputsRegistroSimbolo" style="margin-left: 0.5vh;">
                        <span class="input-group-text">Ciudad</span>
                        <select name="ciudad" id="ciudad" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="grupoInputsRegistro">
                    <input type="password" class="form-control inputFormularioRegistro" placeholder="Contraseña"
                    id="password" name="password" required max="15">
                    <input type="password" class="form-control inputFormularioRegistro"
                    placeholder="Confirmar Contraseña" id="passwordConf" name="passwordConf" required max="15">
                </div>
                
                <div class="grupoInputsRegistro">
                    <!-- Button trigger modal -->
                    <input type="checkbox" data-bs-toggle="modal" data-bs-target="#exampleModal" name="recordarme" id="terminos" name="terminos" class="formInputCheck">
                    <label class="recordarme" for="terminos">Acepto terminos y condiciones de TFI</label>
                    <!--<button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>
                     Modal -->
                    <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Términos y Condiciones de uso de la plataforma por parte de TFI S.A.S</h1>
                                    
                                </div>
                                <div class="modal-dialog modal-dialog-scrollable modalMargenes">
                                    <p class="fuenteModal">Propiedad del contenido del Portal web – Plataforma – aplicativo.
                                        TFI informa que está completamente prohibida la reproducción total o parcial,
                                        traducción, almacenamiento, inclusión, transmisión o acceso a través de medios
                                        digitales o de cualquier otro sistema o tecnología creada o por crearse, sin
                                        autorización previa y escrita de TFI. <br>

                                        <strong class="fuenteModal">Declaración de Privacidad.</strong> <br>

                                        TFI es una empresa comprometida con sus clientes y usuarios que vela por su
                                        calidad y protección. Por lo que tiene como base fundamental la Declaración de
                                        Privacidad, con el fin de garantizar el debido proceso al momento de utilizar
                                        información de personas inscritas en el portal y así no infligir todo lo dispuesto en
                                        la Ley Estatutaria del Habeas Data (Ley 1581 del 2012), reglamentada mediante el
                                        decreto 1377 del 2013 y en la Ley de Privacidad o Habeas Data Colombiana (Ley
                                        1266 de 2008). <br>

                                        TFI se compromete a adoptar políticas de confidencialidad según lo que se establece
                                        más adelante. <br>

                                        Al acceder a nuestra plataforma, usted acepta los mecanismos y practicas utilizadas
                                        en este sitio y contempladas así: <br>

                                        <strong class="fuenteModal"> Recolección de información personal:</strong> la plataforma recolecta información
                                        personal de sus usuarios para garantizar algunas de sus actividades: nombre,
                                        identificación, dirección de correo electrónico, dirección de residencia, número
                                        telefónico, edad, género, formación académica, producción académica y científica,
                                        actividad para la que necesita financiación. <br>

                                        Es importante que el usuario de la plataforma tenga en cuenta que en caso de
                                        suministrar información de identificación personal o datos privados a través de las
                                        herramientas públicas de comunicación en línea ofrecidas por este medio virtual, esa
                                        información puede ser recogida y usada por otros; así mismo el usuario reconoce
                                        que esta información fue suministrada de manera libre. <br>

                                        Por lo anterior TFI manifiesta que no se hace responsable por declaraciones de
                                        privacidad, enlaces u otros contenidos que se encuentren en sitios diferentes de su
                                        portal o que de alguna manera tengan conexión con el mismo. De antemano
                                        estableciendo que es menester de esta empresa la salvaguardia de la privacidad de
                                        la información personal del Usuario obtenida a través de la plataforma, para lo que
                                        estamos se comprometidos a adoptar políticas de seguridad. <br>

                                        La información que sea proporcionada por el Usuario está asegurada por una clave
                                        de acceso que sólo él conoce. Por tanto, el usuario es el único responsable de
                                        mantener en secreto su clave. (Información que debe ser acorde a la plataforma de
                                        TFI) <br>

                                        TFI, no es responsable de consecuencias derivadas del ingreso indebido de terceros
                                        a la base de datos y/o por alguna falla técnica en el funcionamiento y/o conservación
                                        de datos en el sistema en cualquiera de los menús de su página web. <br>

                                        TFI, no responde ante casos de ataques o incidentes contra la seguridad de su sitio
                                        WEB o contra sus sistemas de información. <br>

                                        TFI no tiene como política vender, alquila o arrendar su lista de clientes, base de
                                        datos y usuarios a terceras partes, especialmente si son de carácter privado o
                                        comercial pero si puede compartir datos con socios confiables, estos socios tienen
                                        prohibido el uso de la información personal que pueda identificar expresamente a
                                        Los usuarios -salvo que se requiera para proveer servicios al portal- y de ninguna
                                        manera utilizan o divulgan la información privada sin consentimiento previo. <br>

                                        La plataforma, divulgará información de sus usuarios sin que sea notificado, para
                                        el cumplimiento de la ley para: <br> </p>

                                        <ol style="list-style: none;">
                                            <li class="fuenteModal">(a) conformar edictos legales.</li>
                                            <li class="fuenteModal">b) cumplir con un proceso legal realizado sobre el portal.</li>
                                            <li class="fuenteModal">(c) proteger y defender los derechos o la propiedad de TFI.</li>
                                            <li class="fuenteModal">(d) actuar bajo circunstancias extremas con el fin de proteger la seguridad de los usuarios de la plataforma o del público.</li>
                                        </ol>
                                        
                                        <p class="fuenteModal">
                                            Modificaciones a esta Declaración: TFI, podrá ocasionalmente actualizar esta
                                            Declaración de Privacidad para reflejar las sugerencias tanto de la empresa como de
                                            los clientes.
                                            Condiciones de Uso:</p>
                                            <ol>
                                                <li class="fuenteModal">
                                                    al ingresar a la plataforma todo usuario reconoce:
                                                    <ul>
                                                        <li class="fuenteModal">
                                                            El derecho de modificar en cualquier tiempo y por cualquier razón sin
                                                            previo aviso los Términos y Condiciones de la plataforma.
                                                        </li>
                                                        <li class="fuenteModal">
                                                            El derecho de negar el registro a cualquier persona, en cualquier momento
                                                            y por cualquier razón.
                                                        </li>
                                                        <li class="fuenteModal">
                                                            El derecho a utilizar la información personal y/o contenidos suministrados
                                                            por los Usuarios de acuerdo con los Términos y Condiciones de la
                                                            plataforma.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="fuenteModal">
                                                    El Usuario deberá cumplir los Términos y Condiciones del Portal, así como toda
                                                    condición adicional que se establezca en el Portal.
                                                </li>
                                                <li class="fuenteModal">
                                                    TFI no garantiza la disponibilidad y continuidad del funcionamiento La plataforma.
                                                    Cuando ello sea razonablemente posible, 6. MINCIENCIAS no incurrirá en
                                                    responsabilidad con el usuario o terceros, cuando su sitio WEB no se encuentre
                                                    disponible.
                                                </li>
                                                <li class="fuenteModal">
                                                    TFI excluye cualquier responsabilidad por los daños y perjuicios de toda
                                                    naturaleza que puedan deberse a la falta de disponibilidad o de continuidad del
                                                    funcionamiento de la plataforma
                                                </li>
                                                <li class="fuenteModal">
                                                    TFI no controla ni garantiza, y por lo tanto no se hace responsable por, la ausencia
                                                    de virus ni de otros elementos en los contenidos de la plataforma.
                                                </li>
                                                <li class="fuenteModal">
                                                    TFI no garantiza y por lo tanto no es responsable de, la licitud, de los recursos
                                                    económicos recaudados por esta aplicación.
                                                </li>
                                            </ol>
                                            <p class="fuenteModal">
                                                <strong class="fuenteModal">Usos prohibidos del Portal.</strong> <br>
                                                Se prohíbe la utilización de la plataforma para promocionar, publicitar, hacer
                                                propaganda, apología o cualquier exaltación de actividades al margen de la ley <br>
                                            </p>
                                            <ul>
                                                <li class="fuenteModal">
                                                    Incluir en el Portal cualquier información falsa o inexacta o información
                                                    que no corresponda a la realidad.
                                                </li>
                                                <li class="fuenteModal">
                                                    Usar cualquier elemento, diseño, software o rutina para interferir o
                                                    intentar interferir con el funcionamiento adecuado de este Portal o
                                                    cualquier actividad que sea llevada a cabo en el Portal.
                                                </li>
                                                <li class="fuenteModal">
                                                    Intentar descifrar, de-compilar o desensamblar cualquier software
                                                    comprendido en el Portal o que de cualquier manera haga parte de la
                                                    plataforma.
                                                </li>
                                                <li class="fuenteModal">
                                                    En general, incluir o colocar en el Portal información falsa, inexacta,
                                                    incompleta o engañosa.
                                                </li>
                                            </ul>
                                            <p class="fuenteModal">
                                                Estos Términos y Condiciones han sido dispuestos de conformidad con las leyes
                                                colombianas. Cualquier acción o reclamación deberá hacerse ante los Tribunales de
                                                Colombia y de conformidad con las leyes colombianas, así el reclamante se
                                                encuentre domiciliado en otro país. <br>
                                            </p>
                                            <p class="fuenteModal">
                                                <strong class="fuenteModal">Registro y Participación del Usuario</strong> <br>
                                                Por el hecho de ingresar al Portal y para garantizar el buen y adecuado uso del
                                                mismo, el Usuario deberá cumplir con lo siguiente:
                                            </p>
                                            <ul>
                                                <li class="fuenteModal">
                                                    Observar Guía de principios y recomendaciones, los Términos y Condiciones
                                                    y cualquier otra condición establecida en esta plataforma.
                                                </li>
                                                <li class="fuenteModal">Ser responsable por cualquier actividad que se lleve a cabo bajo su registro.</li>
                                                <li class="fuenteModal">
                                                    Ser responsable por mantener la confidencialidad de su password o
                                                    contraseña.
                                                </li>
                                                <li class="fuenteModal">
                                                    No usar este Portal como medio para desarrollar actividades ilegales o no
                                                    autorizadas tanto en Colombia.
                                                </li>
                                                <li class="fuenteModal">
                                                    Agredir, injuriar, calumniar y en cualquier forma referirse en términos
                                                    irrespetuosos o falsos a TFI o cualquier socio estratégico
                                                </li>
                                            </ul>
                                            <p class="fuenteModal">
                                                Mientras en la plataforma estén prohibidas estas conductas, TFI no será responsable
                                                por su cumplimiento y el Usuario lo mantendrá indemne por todo concepto.
                                            </p>
                                        
                                </div>
                                <div class="modal-body">
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="botonFormRegistro mt-5 " onclick="frmRegistro()">Enviar</button>
                <div class="linkRegistrarse">
                    <p class="aunRegistrarse">¿Ya tienes una cuenta? <a class="aunRegistrarse" href="<?php echo BASE_URL; ?>Home/login/">INICIA SESIÓN</a></p>
                </div>
            </form>
        </div>
    </div>
<?php require_once("View/Template/footer.php") ?>
<script src="<?php echo BASE_URL; ?>Assets/js/login.js"></script>
</body>

</html>