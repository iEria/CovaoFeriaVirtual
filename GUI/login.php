<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feria Virtual</title>
    <link rel="stylesheet" href="./GUI/css/Styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<header style="background-color: #27A4D0;">
      <div class="container">
          <div class="row">
            <a class=" pl-5 navbar-brand" href="#inicio">
                <img src="./img/covaito2.png" class="img-fluid" alt="...">
            </a>
          </div>
      </div>
      <hr style="border: 5px solid #0F4E9E;" class="mt-12">
  </header>

<body>
    <br>
    <div class="container">
        <h1 class="text-center my-1 box">Bienvenido!</h1>
        <div class="row my-5 d-flex justify-content-center">
            <div class="col-6">
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <form action="../BL/UsuarioLogin.php" method="post">
                        <h3>Iniciar sesión</h3>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txtCedula" name="txtCedula" placeholder="name@example.com">
                            <label for="floatingInput">Cédula</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="txtContrasena"  name="txtContrasena" placeholder="Password">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>
    <footer style="background-color: #27A4D0; color: white" class="footerall">
    <hr style="border: 5px solid #0F4E9E;" class="mt-12">
        <div class="col-md-12 mx-auto text-center">
            <p class="pl-5 text-right">Hospício de Huérfanos de Cartago ©2020-2022</p>
            <p class="pl-5 text-right">IDS 2022</p>
        </div>
    </footer>
    <script src="/GUI/js/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>