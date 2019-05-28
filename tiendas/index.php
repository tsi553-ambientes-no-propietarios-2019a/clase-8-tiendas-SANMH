<?php
include('common/utils.php');
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <!-- Bootstrap 4 -->

     <meta charset="UTF-8">
     <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

     <link href="css/estilo.css" type="text/css" media="all" / >

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Login</title>
</head>
<body>

    <h1 class="h1 text-center my-3">Tienda EC</h1>
    <br>
    <h3 style="color: white"> <center>Registro de Tiendas</center> </h3>
    <br>

    <?php if(isset($error_message)) { ?>
	<div class="text-center text-danger" ><strong style="color:green"><?php echo $error_message; ?></strong></div>   <br>
    <?php } ?>

    <form action="php/process_login.php" method="post">
    <div class="container col-3">
        <div class="form-group">
            <label>Usuario: </label>
            <input type="text" name="username" placeholder="Usuario" class="form-control">
        </div>
        <div class="form-group">
            <label>Contraseña:</label>
            <input type="password" name="password" placeholder="Clave" class="form-control">
        </div>
        <div class="form-group text-center">
            <button class="btn btn-primary">Ingresar</button>
        </div>
        <div class="form-group text-center">
            <a href="registration.php"> Resgistrar tienda </a>
        </div>
    </div>
        
    </form>

    <footer class="container py-5"> 
      
    </footer>

     <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
