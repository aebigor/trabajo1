
</div>
        <div class="table-container">
        <div class="col-8 p-4">
        <table class="table">
        <thead class="bg-info">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">usuario</th>
                <th scope="col">dia_semana</th>
                <th scope="col">hora_inicio</th>
                <th scope="col">hora_fin</th>
                
                <th scope="col"></th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            include "../models/db.php";
            
            $sql=$conexion->query("select * from gerente");
            while ($datos = $sql->fetch_object()) { ?>

            
    
        <tr>
            
            <td scope="row"><?=$datos->Codigo ?></td>
            <td><?=$datos->usuario ?></td>
            <td><?=$datos->dia_semana ?></td>
            <td><?=$datos->hora_inicio ?></td>
            <td><?=$datos->hora_fin ?></td>
            
        
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




</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
    