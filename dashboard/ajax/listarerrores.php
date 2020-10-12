<?php
	/* Connect To Database*/
	require_once ("../conexion.php");

	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));
	mysqli_set_charset($con,"UTF8");
	$tables="datospersonales";
	$campos=" datospersonales.id, datospersonales.identificacion, datospersonales.comprobante, datospersonales.foto, datospersonales.tel, datospersonales.correoel, datospersonales.ciudad, datospersonales.nombre, datospersonales.app, datospersonales.estado, datospersonales.tokenAccess";
	$sWhere=" datospersonales.nombre LIKE '%".$query."%'";
	$sWhere.=" order by datospersonales.id";
	
	
	include 'pagination.php'; //include pagination file
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); //how much records you want to show
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	//Count the total number of row in your table*/
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	//main query to fetch the data
	$query = mysqli_query($con,"SELECT $campos FROM $tables where estado =3 LIMIT $offset,$per_page");
	//loop through fetched data
			 

		
	
	if ($numrows>0){
		
	?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Foto</th>
						<th class="text-center">Email </th>
						<th class='text-right'>Nombre</th>
						<th>Identificación</th>
						<th>Comprobante</th>
						<th class='text-right'>Estado</th>
					</tr>
				</thead>
				<tbody>	
						<?php 
						$finales=0;
						while($row = mysqli_fetch_array($query)){
							//header('Content-type: application/pdf');
							$id = $row['id'];
							$foto = $row['foto'];
							$correo=$row['correoel'];
							$nombre=$row['nombre']. " " . $row['app'];
							$archivoid = $row['identificacion'];
							$comprobante = $row['comprobante'];
							$estado = $row['estado'];
							$finales++;
						?>	
						<tr class="<?php echo $text_class;?>">
							<td><?php echo $id ?></td>
							<td><?php echo '<img src="'.$row['foto'].'" width="100px;" height="100px;">';?></td>
							<td ><?php echo $correo;?></td>
							<td class='text-center' ><?php echo $nombre;?></td>
							<td><a href="<?php echo $archivoid; ?>"><?php echo "Ver identificación";?></a></td>
							<td><a href="<?php echo $comprobante; ?>"><?php echo "Ver comprobante";?></a></td>
							<td class='text-center' ><?php echo $estado;?></td>
							<td>
								<a href="#editProductModalErrores"  data-target="#editProductModalErrores" class="edit" data-toggle="modal" data-id='<?php echo $id?>' data-estado='<?php echo $estado; ?>'><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
								<!--<a href="#deleteProductModal" class="delete" data-toggle="modal" data-id="<?php echo $id;?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>-->
                    		</td>
						</tr>
						<?php }?>
						<tr>
							<td colspan='6'> 
								<?php 
									$inicios=$offset+1;
									$finales+=$inicios -1;
									echo "Mostrando $inicios al $finales de $numrows registros";
									echo paginate( $page, $total_pages, $adjacents);
								?>
							</td>
						</tr>
				</tbody>			
			</table>
		</div>	

	
	
	<?php	
	}	
}
?>          