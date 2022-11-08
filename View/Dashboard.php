<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <title>Dashboard</title>
</head>
<body>
    
    <table id="tblProyectos" class="display" style="width:100%">
        <thead>
            <tr>
                <!--id, nombre, boton-->
                <th>id</th>
                <th>titulo</th>
                <th>comienzo</th>
                <th>final</th>
                <th>estado</th> 
                <th>acciones</th> 
                <th>observaciones</th> 
            </tr>            
        </thead>
        
        <tbody>
            
        </tbody>
    </table>
    <script>
        const base_url = "<?php echo BASE_URL;?>"
    </script>
    <script  src="https://code.jquery.com/jquery-3.6.1.js"  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="  crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL;?>Assets/js/DataTable.js"></script>
    <script src="<?php echo BASE_URL;?>Assets/js/Dashboard.js"></script>
</body>
</html>