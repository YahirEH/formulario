<!DOCTYPE html>
<html>
<head>
  <title>Formulario</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
  <h2>Vault tec</h2>
  <form action="action.php" method="POST">
    <div class="header">
      <img src="Fallout.png" alt="Logo" class="logo-image">
      <p>Queremos conocerte, por favor contesta esta encuesta</p>
    </div>
   
    <div>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
      <span id="nombreError" class="error"></span>
    </div>

    <div>
      <label for="apellido">Apellido Paterno:</label>
      <input type="text" id="apellido" name="apellido" required>
      <span id="apellidoError" class="error"></span>
    </div>

    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <span id="emailError" class="error"></span>
    </div>

    <div>
      <label for="juego">Juego favorito:</label>
      <input type="text" id="juego" name="juego" required>
      <span id="juegoError" class="error"></span>
    </div>

    <div>
      <label for="genero">Género favorito:</label>
      <input type="text" id="genero" name="genero" required>
      <span id="generoError" class="error"></span>
    </div>

    <div>
      <label for="consola">Consola favorita:</label>
      <select id="consola" name="consola" required>
        <option value="">Selecciona una opción</option>
        <option value="PS5">PlayStation 5</option>
        <option value="Xbox Series X">Xbox Series X</option>
        <option value="Nintendo Switch">Nintendo Switch</option>
        <option value="PC">PC</option>
      </select>
      <span id="consolaError" class="error"></span>
    </div>

    <div>
      <input type="submit" value="Enviar">
      <input type="reset" value="Restablecer">
    </div>
  </form>
</body>
</html>
