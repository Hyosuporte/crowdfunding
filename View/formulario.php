<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../Assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <title>Subida Proyectos</title>
  </head>
  <body class="main">
    <nav class="navbar navbar-expand-lg fixed-top">
      <div>
        <a class="navbar-brand">Formulario Subida de Proyectos</a>
        <button
          class="navbar-toggler"
          data-target="#my-nav"
          data-toggle="collapse"
          aria-controls="my-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <form action="<?php echo BASE_URL; ?>organizacion/insertarorg" method="post">
        <div class="formulario">
            <div class="container mt-2">
                <div class="card">
                    <div class="card-header">
                        Datos de la Organizacion
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">                    
                            <span class="input-group-text">id de la Organizacion</span>
                            <input type="number" class="form-control" placeholder="id de la organizacion" name="id_org" required>                                                       
                        </div>   
                        <div class="input-group mb-3">                    
                            <span class="input-group-text">Nombre de la Organizacion</span>
                            <input type="text" class="form-control" placeholder="Nombre de la organizacion" name="nombre" id="nombre" required>                                                       
                        </div>   
                        <div class="input-group mb-3">
                            <span class="input-group-text">Tipo Organizacion</span>
                            <select name="organizacion" id="organizacion" style="margin-right: 3rem;">
                                <option value="1">ONG</option>
                                <option value="2">OSC</option>
                                <option value="3">Empresa</option>
                                <option value="4">Persona Natural</option>
                                <option value="5">Academia</option>
                                <option value="6">Grupos No Constituidos</option>
                            </select> 
                            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                            <input type="number" class="form-control " placeholder="Telefono de contacto de la persona encargada" required id="telefono" name="telefono" onkeydown="filtro()">
                            <script>
                                function filtro()
                                {
                                var tecla = event.key;
                                if (['.','e'].includes(tecla))
                                   event.preventDefault()
                                }
                            </script>
                        </div>
                        <div class="input-group mb-3">                            
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Redes Sociales" required id="redes" name="redes">
                            <span class="input-group-text">Pagina WEB</span>
                            <input type="text" class="form-control" placeholder="Pagina WEB" id="pagina" name="pagina" required>    
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Numero de cuenta</span>
                            <input type="text" class="form-control" placeholder="Numero de cuenta" id="cuenta" name="cuenta" maxlength="20" required>
          </div>
        </div>
        <button class="btn btn-primary mb-3 mt-2" type="submit" style="width: 250px; ;height: 50px; margin:auto;" id="btnContinuar">Guardar</button>
      </div>
    </form>
    <form action="<?php echo BASE_URL; ?>proyecto/insertarproyecto" method="post">
      <div class="formulario">
        <div class="card">
                    <div class="card-header">
                        Datos del Proyecto
                    </div>
                    <div class="card-body">        
                        <div class="input-group mb-3">
                            <span class="input-group-text">Titulo del Proyecto</span>
                            <input type="text" class="form-control" placeholder="Titulo del Proyecto" id="titulo" name="titulo" size="90rem" required>
                        </div>   
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                            <input type="text" class="form-control" placeholder="KeyWords"  required id="keywords" name="keywords">
                        </div>    
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Abstract" id="Abstract" name="Abstract" style="height: 150px"></textarea>
                            <label for="floatingTextarea">Abstract</label>
                        </div>    
                        <div class="input-group mb-3" >                    
                            <span class="input-group-text" >Indicador Impacto</span>
                            <input type="number" class="form-control" placeholder="Indicador Impacto" id="impacto" name="impacto"  style="margin-right: rem;" required>
                            <span class="input-group-text">Monto financiero</span>
                            <input type="number" class="form-control" placeholder="Monto financiero" id="monto" name="monto" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="card">
                                <div class="card-body">
                                        </div>
                                        <div class="input-group">
                                        <label for="final">Fecha Comienzo Campaña</label>
                                        <div class="input-group mb-3">   
                                            <span class="input-group-text"><i class="fa-solid fa-calendar-check"></i></span>
                                            <input  type="date" class="form-control"  id="comienzo" name="comienzo">
                                        </div>
                                        </div>
                                        <div class="input-group">
                                        <label for="final">Fecha Final Campaña</label>
                                        <div class="input-group mb-3">   
                                            <span class="input-group-text"><i class="fa-solid fa-calendar-check"></i></span>
                                            <input  type="date" class="form-control"  id="final" name="final">
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="input-group">
                                        <label for="ejecucion">Tiempo de ejecucion</label>
                                        <div class="input-group mb-3">   
                                            <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                                            <input  type="number" class="form-control"  id="ejecucion" name="ejecucion">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Foto</span>
                            <input class="form-control" type="file" id="foto" required itemid="foto">
                            <span class="input-group-text"><i class="fa-brands fa-youtube"></i></span>
                            <input type="text" class="form-control" placeholder="Video" required id="video" name="video">
                         </div> 
                         <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Informacion Adicional" id="info" name="info" style="height: 150px"></textarea>
                            <label for="floatingTextarea">Informacion Adicional</label>
                        </div>  
                        <div class="input-group mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class=" mb-3">                    
                                        <label for="camara" class="form-label" >Camara de comercio</label>
                                        <input class="form-control" type="file" id="camara" required itemid="camara">
                                    </div> 
                                </div>
                            </div>
                        </div>         
                    </div>
            <button class="btn btn-primary mb-3 mt-2" type="submit" style="width: 250px; ;height: 50px; margin:auto;" id="btnContinuar">Enviar</button>
                </div>
            </div>
        </div>
      </div>
    </form>
    <footer>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Contacto</h5>
          <p class="card-text">Poner contato aqui</p>
        </div>
      </div>
    </footer>
    <script src="../Assets/js/funciones.js"></script>
    <script
      src="https://kit.fontawesome.com/b2831985f5.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
