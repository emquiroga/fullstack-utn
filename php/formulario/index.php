<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
<div class="column container">
    <h2>Formulario de Registro</h2>
    <form method="post" action="form_data.php" class="col s12">
      <div class="column">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nombre" name="nombre" type="text" class="validate">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <!-- <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div> -->
      </div>
      <button class="btn waves-effect waves-light">Enviar</button>
    </form>
  </div>
</body>
</html>