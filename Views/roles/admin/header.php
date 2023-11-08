<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/registroG3/assets/css/registro.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71bc9b1c9c.js" crossorigin="anonymous"></script>
    
    <title>crud</title>
</head>
<body>
<div >
<div class="form-container">
<form action="registroU.php" class="formulario" method="post" enctype="multipart/form-data">
    <div> 
        <label for="menu">
            <img style="width: 100px" src="/registroG3/img/LOGO_Blanco.webp" class="menu-icono" alt="menu">
        </label>
    </div>
    
    <div class="mb-3">
    <label for="menu" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nombre">
    </div>
    
    <div class="mb-3">
    <label for="menu" class="form-label">Identificación</label>
    <input type="text" class="form-control" name="Identific">
    </div>
    
    <div class="mb-3">
    <label for="menu" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="FechaNa">
    </div>
    
    <div class="mb-3">
    <label for="menu" class="form-label">Documento</label>
    <input type="file" class="form-control" name="Foto" id="Foto" onchange="actualizarImg()">
    </div>
    
    <div class="mb-3">
    <label for="menu" class="form-label">Correo</label>
    <input type="text" class="form-control" name="Correo">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    
    <div class="mb-3">
    <label for="menu" class="form-label">Password</label>
    <input type="password" class="form-control" name="passCorreo">
    </div>
    
    <button type="submit" class="btn btn-primary" name="btnregister" value="ok">Submit</button>
</form>
</div>