<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71bc9b1c9c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/registroG3/assets/css/registro.css" type="text/css">
</head>
<body>
<div class="container-fluid row">
<form class="formulario" method="post" enctype="multipart/form-data">
    <div class=""> 
        <label for="menu">
            <img style="width: 100px" src="/registroG3/img/LOGO_Blanco.webp" class="menu-icono" alt="menu">
        </label>
    </div>
    
    
    
    <div class="mb-3">
    <label for="menu" class="form-label">Correo</label>
    <input type="text" class="form-control" name="Correo">
    
    
    <div class="mb-3">
    <label for="menu" class="form-label">Password</label>
    <input type="password" class="form-control" name="passCorreo">
    </div>
    
    <button type="submit" class="botons" name="btnregister" value="ok">Iniciar Secion</button>
</form>