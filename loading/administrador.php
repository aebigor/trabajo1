<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71bc9b1c9c.js" crossorigin="anonymous"></script>
    <title>crud</title>
</head>
<body>
    <h1 class="text-center p-3">administrador</h1>
<div class="container-fluid row">
<form class="col-4 p-3" method="post"  enctype="multipart/form-data">
    <?php
    include "models/db.php";
    include "controllers/registro_usuario.php"
    

    ?>
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nombre">
    
    </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">identificacion</label>
    <input type="text" class="form-control" name="Identific">
    </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">fecha de nacimiento</label>
    <input type="date" class="form-control" name="FechaNa">
    </div>
    

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">documento</label>
    <input type="file" class="form-control" name="Foto" id="Foto" 
    onclick="actualizarImg">
    </div>
    
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">correo</label>
    <input type="text" class="form-control" name="Correo">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    
    
    
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="passCorreo">
    </div>


    <button type="submit" class="btn btn-primary" name="btnregister" value="ok">Submit</button>

    </form>

    <div class="col-8 p-4">
        <table class="table">
        <thead class="bg-info">
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Identific</th>
                <th scope="col">FechaNa</th>
                <th scope="col">Foto</th>
                <th scope="col">Correo</th>
                <th scope="col">passCorreo</th>
                <th scope="col"></th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            include "models/db.php";
            
            $sql=$conexion->query("select * from usuario");
            while ($datos = $sql->fetch_object()) { ?>

            
    
        <tr>
            
            <td scope="row"><?=$datos->Codigo ?></td>
            <td><?=$datos->Nombre ?></td>
            <td><?=$datos->Identific ?></td>
            <td><?=$datos->FechaNa ?></td>
            <td>
                <img style="width:60px" src="data:image/jpg;base64,<?= base64_encode($datos->Foto)?>" alt="">
            </td>
            <td><?=$datos->Correo ?></td>
            <td><?=$datos->passCorreo ?></td>
            <td>
                <a href="" class="btn btn-small btn-warning"  ><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        <?php }
        ?>
</tbody>
</table>
</div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html> 