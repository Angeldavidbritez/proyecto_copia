<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/registro-creador.css">
</head>
<body>
    <form>
        <h2>Universal Commerce</h2>
        <h3>Registro Creador</h3>
      
        <div class="form-row">
          <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
          </div>
      
          <div class="form-group">
            <label for="lastName">Apellido:</label>
            <input type="text" id="lastName" name="lastName" required>
          </div>
        </div>
      
        <div class="form-group">
          <label for="company">Nombre de la empresa:</label>
          <input type="text" id="company" name="company" required>
        </div>
      
        <div class="form-row">
          <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
          </div>
      
          <div class="form-group">
            <label for="phone">Número de teléfono:</label>
            <input type="tel" id="phone" name="phone" required>
          </div>
        </div>
      
        <div class="form-group">
          <label for="address">Dirección:</label>
          <input type="text" id="address" name="address" required>
        </div>
      
        <div class="form-group">
          <label for="website">Página web:</label>
          <input type="text" id="website" name="website" required>
        </div>
      
        <div class="form-group">
          <label for="businessType">Tipo de negocio:</label>
          <input type="text" id="businessType" name="businessType" required>
        </div>
      
        <div class="form-row">
          <div class="form-group">
            <label for="dob">Fecha de nacimiento:</label>
            <input type="date" id="dob" name="dob" required>
          </div>
      
          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
          </div>
        </div>
      
        <div class="form-group">
          <label for="country">País:</label>
          <input type="text" id="country" name="country" required>
        </div>
      
        <div class="form-group">
         <button type="submit">
            <a href="blog-home.html">Crear</a>
        </button>
        </div>
      </form>
</body>
</html>