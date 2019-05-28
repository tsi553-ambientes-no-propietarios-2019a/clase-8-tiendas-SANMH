<?php 
include('common/utils.php');
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
     <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

     <link href="css/estilo.css" type="text/css" media="all" / >

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<title>Nuevo producto</title>
</head>
<body>
	<h1>Nuevo producto</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_newProduct.php" method="post">
		<div>
			<label>Código</label>
			<input type="text" name="code" required="required">
		</div>
		<div>
			<label>Nombre</label>
			<input type="text" name="name" required="required">
		</div>
		<div>
			<label>Tipo</label>
			<select name="type" required="required">
				<option value="">Seleccione...</option>
				<option value="Alimento">Alimento</option>
				<option value="Vestimenta">Vestimenta</option>
				<option value="Salud">Salud</option>
			</select>
		</div>

		<div>
			<label>Stock</label>
			<input type="number" name="stock" required="required">
		</div>

		<div>
			<label>Precio</label>
			<input type="number" name="price" required="required">
		</div>
		<div>
			<button>Registrar</button>
		</div>
	</form>


    <footer class="container py-5"> 
     
    </footer>

   <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE


</body>
</html>