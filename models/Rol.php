<?php
    class rol{
        // ****** 1er Parte: Clase (POO) *************** //
        // Atributos: Encapsulamiento
        private $dbh;
    
        public $Nombre;
        public $Identific;
        public $FechaNa;
        public $Foto;
        public $Correo;
        public $passCorreo;
        // Métodos
        # Sobrecarga de Constructores
        public function __construct(){
            try {
                $this->dbh = DataBase::connection();
                $a = func_get_args();
                $i = func_num_args();
                if (method_exists($this, $f = '__construct' . $i)) {
                    call_user_func_array(array($this, $f), $a);
                }
            } catch (Exception $e) {
                die($e->getMessage());
            } 
        }
        public function __construct3($Correo,$passCorreo){            
            $this->Correo = $Correo;
            $this->passCorreo = $passCorreo;            
        }
        public function __construct2( $Nombre, $Identific,$FechaNa,$Foto,$Correo,$passCorreo){
            
            $this->Nombre = $Nombre;
            $this->Identific = $Identific;
            $this->FechaNa = $FechaNa;
            $this->Foto = $Foto;
            $this->Correo = $Correo;
            $this->passCorreo = $passCorreo;
        }
        // Métodos set() y get()        
              
        # Nombre: set()
        public function setNombre($Nombre){
            $this->Nombre = $Nombre;
        }
        # Nombre: get()
        public function getNombre(){
            return $this->Nombre;
        }
        
        # Identific: set()
        public function setIdentific($Identific){
            $this->Identific = $Identific;
        }
        # Identific: get()
        public function getIdentific(){
            return $this->Identific;
        }
        
        # FechaNa: set()
        public function setFechaNa($FechaNa){
            $this->FechaNa = $FechaNa;
        }
        # FechaNa: get()
        public function getFechaNa(){
            return $this->FechaNa;
        }
        
        # Foto: set()
        public function setFoto($Foto){
            $this->Foto = $Foto;
        }
        # Foto: get()
        public function getFoto(){
            return $this->Foto;
        }
        
        # Correo: set()
        public function setCorreo($Correo){
            $this->Correo = $Correo;
        }
        # Correo: get()
        public function getCorreo(){
            return $this->Correo;
        }
        
        # passCorreo: set()
        public function setpassCorreo($passCorreo){
            $this->passCorreo = $passCorreo;
        }
        # passCorreo: get()
        public function getpassCorreo(){
            return $this->passCorreo;
        }
    
        # d$dbh: get()
    
        
        // ****** 2da Parte: Persistencia DB (CRUD) ****** //

        # CU09 - Registrar Rol
        public function rolCreate() {
            try {
                $sql = "INSERT INTO usuario (Nombre, Identific, FechaNa, Foto, Correo, passCorreo) 
                        VALUES (:Nombre, :Identific, :FechaNa, :Foto, :Correo, :passCorreo)";
        
                $stmt = $this->dbh->prepare($sql);
        
                $stmt->bindValue(':Nombre', $this->getNombre());
                $stmt->bindValue(':Identific', $this->getIdentific());
                $stmt->bindValue(':FechaNa', $this->getFechaNa());
                $stmt->bindValue(':Correo', $this->getCorreo());
                $stmt->bindValue(':passCorreo', $this->getpassCorreo());
        
                // File upload handling
                $imagen = '';
        
                if (isset($_FILES['Foto']['tmp_name']) && is_uploaded_file($_FILES['Foto']['tmp_name'])) {
                    $imagen = file_get_contents($_FILES['Foto']['tmp_name']);
                }
        
                $stmt->bindValue(':Foto', $imagen, PDO::PARAM_LOB);
        
                $stmt->execute();
        
                // Redirect before any output
                header("Location:?c=Roles&a=readRol");
                exit();
            } catch (PDOException $e) {
                // Log or handle the exception
                echo '<div class="alert alert-danger">Error: ' . $e->getMessage() . '</div>';
            }
        }
        
        # CUXX - Consultar Roles
        public function rolRead(){
    try {
        $rolList = [];
        $sql = 'SELECT * FROM usuario';
        $stmt = $this->dbh->query($sql);

        foreach ($stmt->fetchAll() as $rolData) {
            $rol = new rol();  // Create a new rol instance

            // Set properties using setter methods
            $rol->setNombre($rolData['Nombre']);
            $rol->setIdentific($rolData['Identific']);
            $rol->setFechaNa($rolData['FechaNa']);

            // Handle the image data using base64 encoding
            $fotoData = base64_encode($rolData['Foto']);
            $rol->setFoto($fotoData);

            $rol->setCorreo($rolData['Correo']);
            $rol->setpassCorreo($rolData['passCorreo']);

            // Add the rol instance to the list
            $rolList[] = $rol;
        }

        return $rolList;
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

        
        # CUXX - Obtener el Rol por Id
        public function getRolById($Codigo){
            try {
                $sql = "SELECT * FROM ROLES WHERE rol_code=:Codigo";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('Codigo', $Codigo);
                $stmt->execute();                
                $rolDb = $stmt->fetch();                
                $rol = new Rol(
                    $rolDb['rol_code'],
                    $rolDb['rol_name']
                );                
                return $rol;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CUXX - Actualizar Rol
        public function rolUpdate(){
            try {                
                $sql = 'UPDATE ROLES SET
                            rol_code = :Codigo,
                            rol_name = :Nombre
                        WHERE rol_code = :Codigo';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('Codigo', $this->getCodigo());
                $stmt->bindValue('Nombre', $this->getRolName());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CUXX - Eliminar Rol
        public function rolDelete($Codigo){
            try {
                $sql = 'DELETE FROM ROLES WHERE rol_code = :Codigo';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('Codigo', $Codigo);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            } 
        }
    }    
?>