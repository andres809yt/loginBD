<?include ("db.php");?>
<!DOCTYPE html>
<html lang ="en" dir="ltr">
<head>
    <link rel="stylesheet" href="estilos.css">
<meta charset="UTF-8">
<title>Formulario </title>

</head>
<body>
<form class="form-login" action="button" method="POST" 
    
          <div class="controls">
<div class=form-group">
    <input class="controls" type="email" name="email" value="" placeholder="email">
</div>
<div class="form-group">
    <input class="controls" type="date" name="fechanacimiento" value="" placeholder="fechanacimiento">
</div>
<div class="form-group">
<input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
</div>
<div class="form-group">
    <input class="controls" type="password" name="contraseña" value="" placeholder="contraseña">
</div>
<button class="buttons" type="submit" name="guardar">Registrar</button>
              <p> <a> ¿Olvidaste tu contraseña?</a></p>

    
</form>
</body>
</html>
