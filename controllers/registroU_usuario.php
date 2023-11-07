<?php
error_reporting(0);
if (!empty($_POST['btnregister'])) {

    if (
        isset($_POST["Nombre"]) && !empty($_POST["Nombre"]) &&
        isset($_POST["Identific"]) && !empty($_POST["Identific"]) &&
        isset($_POST["FechaNa"]) && !empty($_POST["FechaNa"]) &&
        isset($_POST["Correo"]) && !empty($_POST["Correo"]) &&
        isset($_POST["passCorreo"]) && !empty($_POST["passCorreo"])
    ) {
        
        $nombre = $_POST["Nombre"];
        $identific = $_POST["Identific"];
        $fechaNa = $_POST["FechaNa"];
        $correo = $_POST["Correo"];
        $passCorreo = $_POST["passCorreo"];
        
        try {
            $imagen = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
        } catch (Exception $e) {
            $imagen = "";
        }

        if ($imagen != "") {
            
        

        $sql = $conexion->query("INSERT INTO usuario (
            Nombre,
            Identific,
            FechaNa,
            Foto,
            Correo,
            passCorreo
        ) VALUES ( 
            '$nombre', 
            '$identific',
            '$fechaNa',
            '$imagen',
            '$correo', 
            '$passCorreo'
        )");}

        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
            header("location:loading/rol.php");
        } else {
            echo '<div class="alert alert-danger">Error al registrar correctamente</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    } ?>



    <script>
        (function(){
            var not=function(){ 
            window.history.replaceState(null, null, window.location.pathname);
            }
            setTimeout(not, 0);
        }())
    </script>

<?php }