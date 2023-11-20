
	<?php 
					require_once "controllers/subir.php"; ?>  
    
		<div class="container-fluid">
			<ul class="full-box list-unstyled page-nav-tabs">
				<li>
					<a href="?c=Roles&a=createUser"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO ROL</a>
				</li>
				<li>
					<a class="active" href="?c=Roles&a=readRol"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ROLES</a>
				</li>
				<li>
					<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR ROL</a>
				</li>
			</ul>
		</div>

		<!-- Content -->
		<div class="container-fluid">
			<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
					
							<th>NOMBRE</th>
							<th>identificacion</th>
							<th>FECHA_NACIMIENTO</th>
							<th>FOTO</th>
							<th>CORREO</th>
							<th>PASSWORD</th>
							<th>Actualizar</th>
							<th>ELIMINAR</th>
							
						</tr>
					</thead>
					<tbody>

	


            
					      
            
	<?php foreach ($roles as $rol) : ?>
	
    <tr class="text-center">
        <!-- Check if $rol is not null before accessing its properties -->
        
            <td><?php echo $rol->getnombre() ?></td>
            <td><?= $rol->getIdentific() ?></td>
            <th><?= $rol->getFechaNa() ?></th>
			<td>
    <img style="width:60px" src="data:img/jpg;base64,<?= $rol->getFoto() ?>" alt="">
</td>

            <td><?= $rol->getCorreo() ?></td>
            <td><?= $rol->getpassCorreo() ?></td>
            <td>
                <a href="?c=Roles&a=updateRol&idRol=<?= $rol->getNombre(); ?>" class="btn btn-success">
                    <i class="fas fa-sync-alt"></i>
                </a>
            </td>
            <td>
                <a href="?c=Roles&a=deleteRol&idRol=<?= $rol->getNombre(); ?>" class="btn btn-warning">
                    <i class="far fa-trash-alt"></i>
                </a>
            </td>
        
            <!-- Handle the case where $rol is null -->
        
    </tr>
	
<?php endforeach; ?>




					</tbody>
				</table>
			</div>
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1">Previous</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
		</div>

		</section>
		</main>