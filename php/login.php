<!doctype html>
<html lang="en">
    
<head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/js-login/login.js"></script>
    <script src="../js/js-login/jquery.min.js"></script>
    <script src="../js/js-login/popper.js"></script>
    <script src="../js/js-login/bootstrap.min.js"></script>
    <script src="../js/js-login/main.js"></script>
    
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(../img/bg-1.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Iniciar Sesion</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="#" class="signin-form">
                                <div class="form-group mt-3">
                                    <input id="user" type="text" class="form-control" required value="angel@gmail.com">
                                    <label class="form-control-placeholder" for="username">Usuario</label>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control" required value="12345678">
                                    <label class="form-control-placeholder" for="password">Contraseña</label>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3" onclick="login(document.getElementById('user').value,document.getElementById('password').value )" >Iniciar Sesion</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Recordarme
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Olvide mi Contraseña</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">No tiene cuenta? <a data-toggle="tab" href="pre-registro.php">Registrate</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>