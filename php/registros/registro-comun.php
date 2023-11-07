<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/registro-comun.css">
    <title>Document</title>
</head>

<body>
<form>
    <h1>universal commerse</h1>
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

    <div class="form-row">
        <div class="form-group">
            <label for="dob">Fecha de expiració:</label>
            <input type="date" id="dob" name="dob" required>
        </div>
    <div class="form-group">
            <label for="phone">teléfono:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
    </div>
    <div class="form-group">
    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>
     </div>
     <div class="form-group">
            <label for="name">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
          </div>
    
    <input type="button" value="continuar">
</form>
</body>

</html>