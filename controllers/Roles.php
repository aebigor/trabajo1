<?php
    require_once "models/Rol.php";
    class Roles{
        public function __contructor(){
            echo "Acción main() del controlador Roles";
        }
        // Registrar Rol
        public function createUser() {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/administrador/header.php";
                require_once "views/modulos/mod01_users_create.php";
                require_once "views/roles/administrador/footer.php";
            }
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                try {
                    // Get form data
                    $nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : '';
                    $identific = isset($_POST['Identific']) ? $_POST['Identific'] : '';
                    $fechaNa = isset($_POST['FechaNa']) ? $_POST['FechaNa'] : '';
        
                    // File upload handling
                 
// Your existing code...

// ... (previous code)

// File upload handling
if (isset($_FILES['Foto']) && !empty($_FILES['Foto']['tmp_name'])) {
    $uploadDir = "img/"; // Make sure this directory exists and is writable
    $fileName = uniqid() . "_" . $_FILES['Foto']['name']; // Create a unique filename
    $filePath = $uploadDir . $fileName;

    // Validate file type
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $fileType = mime_content_type($_FILES['Foto']['tmp_name']);
    if (!in_array($fileType, $allowedTypes)) {
        throw new Exception('Invalid file type. Only JPEG, PNG, and GIF are allowed.');
    }

    // Move the uploaded file to the desired directory
    move_uploaded_file($_FILES['Foto']['tmp_name'], $filePath);

    // Set the image path in the database
    $imagen = $filePath;
} else {
    $imagen = "";
}

// ... (rest of the code)



                    $Correo = isset($_POST['Correo']) ? $_POST['Correo'] : '';
                    $passCorreo = isset($_POST['password']) ? $_POST['password'] : '';
        
                    // Create a new rol object and set its properties
                    $rol = new rol;
                    $rol->setNombre($nombre);
                    $rol->setIdentific($identific);
                    $rol->setFechaNa($fechaNa);
                    $rol->setFoto($imagen);
                    $rol->setCorreo($Correo);
                    $rol->setpassCorreo($passCorreo);
        
                    // Call the rolCreate method
                    $rol->rolCreate();
        
                    header("Location:?c=Roles&a=readRol");
                } catch (Exception $e) {
                    // Handle the exception (e.g., log, display an error message)
                    die($e->getMessage());
                }
            }
        }
        
        // Consultar roles
        public function readRol(){
            $roles = new Rol;
            $roles = $roles->rolRead();
            require_once "views/roles/administrador/header.php";
            require_once "views/modulos/rol_read.view.php";
            require_once "views/roles/administrador/footer.php";            
        }
        // Actualizar Rol
        public function updateRol(){
            // 1ra Parte: Obtener el registro
            $rol = new Rol;
            $rol = $rol->getRolById("1");            
            // 2da Parte: Actualizar el registro
            $rol_2 = new Rol(
                3,
                "vendedor"
            );
            // $rol_2->rolUpdate();
        }
        // Eliminar Rol
        public function deleteRol(){
            $rol = new Rol;
            // $rol->rolDelete("3");
        }

    }

?>