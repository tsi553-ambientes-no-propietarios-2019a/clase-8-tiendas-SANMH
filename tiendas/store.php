<?php 
include('common/utils.php');

if($_GET) {
	if(isset($_GET['id'])) {
		$id_tienda_url = $_GET['id'];//obtengo el ID de la tienda seleccionada
	}
}

$products = getProductsNew($conn, $id_tienda_url);
$id_tienda_sesion = $_SESSION['user']['id'];//obtengo el ID de la tienda con sesion activa
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

     <link href="css/estilo.css" type="text/css" media="all" / >

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Store</title>
</head>
<body>
    <h1>Tienda: <?php echo $_SESSION['user']['store']; ?></h1>
    <br>

    <?php if($id_tienda_sesion==$id_tienda_url) { ?>
        <a href="new_product.php">añadir producto</a>
    <?php } 
    /*
    Esta porcion de codigo no podra aparecer porque al enlistar las tiendas no se muestra la tienda
    del usuario activo por consiguiente no podra añadir nuevos porductos solo verlos
    */
    ?>


    <h2>Lista de productos </h2>
    

	<div class="table-responsive">
    <table class="table">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Stock</th>
				<th>Precio</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($products as $p) { ?>
				<tr>
					<td><?php echo $p['code'] ?></td>
					<td><?php echo $p['name'] ?></td>
					<td><?php echo $p['type'] ?></td>
					<td><?php echo $p['stock'] ?></td>
					<td><?php echo $p['price'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
   </div> 

    <br><a href="home.php">Regresar a home</a>

	<footer class="container py-5"> 
     
	 </footer>
 
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE
 

</body>
</html>