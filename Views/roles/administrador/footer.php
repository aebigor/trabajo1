
<div class="table-container">
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
            include "../models/db.php";
            
            $sql=$conexion->query("select * from usuario");
            while ($datos = $sql->fetch_object()) { ?>

            
    
        <tr>
            
            <td scope="row"><?=$datos->Codigo ?></td>
            <td><?=$datos->Nombre ?></td>
            <td><?=$datos->Identific ?></td>
            <td><?=$datos->FechaNa ?></td>
            <td>
                <img style="width:60px" src="data:img/jpg;base64,<?= base64_encode($datos->Foto)?>" alt="">
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
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html> 