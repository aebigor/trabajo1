<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71bc9b1c9c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/registroG3/assets/css/registro.css">
    <title>crud</title>
</head>
<body>
    <h1 class="text-center p-3">administrador</h1>
<div > 
<div class="form-container">
    <form  method="post"  enctype="multipart/form-data">
    <?php
    
    require_once "../controllers/registroU_usuario.php";
    

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

    </div>
