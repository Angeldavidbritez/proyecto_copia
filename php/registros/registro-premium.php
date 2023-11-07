<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/registro-premium.css">
<body>
    <form>
  <h2>Universal Commerce</h2>
  <h3>Registro Premium</h3>

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
    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>
  </div>

  <div class="form-group">
    <label for="phone">Número de teléfono:</label>
    <input type="tel" id="phone" name="phone" required>
  </div>

  <div class="form-group">
    <label for="address">Dirección:</label>
    <input type="text" id="address" name="address" required>
  </div>

  <div class="form-row">
    <div class="form-group">
      <label for="cardNumber">Número de tarjeta:</label>
      <input type="text" id="cardNumber" name="cardNumber" required>
    </div>

    <div class="form-group">
      <label for="cardType">Tipo de tarjeta:</label>
      <input type="text" id="cardType" name="cardType" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group">
      <label for="expiryDate">Fecha de expiración:</label>
      <input type="text" id="expiryDate" name="expiryDate" required>
    </div>

    <div class="form-group">
      <label for="securityCode">Código de seguridad:</label>
      <input type="text" id="securityCode" name="securityCode" required>
    </div>
  </div>

  <div class="form-group">
    <label for="postalCode">Código postal:</label>
    <input type="text" id="postalCode" name="postalCode" required>
  </div>

  <div class="form-group">
    <button type="submit"><a href="">crear</a></button>
  </div>
</form>
</body>
</html>