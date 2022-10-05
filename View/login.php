<?php require_once('Template/header.php')?>
<body class="main">
    <nav class=" navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand ">Login</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
       </nav> 
    <div class="container">
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Correo</span>
                <input type="email" class="form-control" placeholder="Correo" id="email">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Contraseña</span>
                <input type="password" class="form-control" placeholder="Correo" id="password">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
    </div>

<?php require_once('Template/footer.php') ?>