<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feria Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  </head>
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
  <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto text-center">
                <h1>Accounting</h1>
            </div>
        </div>
    </div>
    <div class="container">
      <a href="accounting.php" class="btn btn-outline-danger">Volver</a>
      <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDesactivarAdmin" data-bs-whatever="@mdo"><i class="fas fa-user-times"></i> Agregar Video</button>

    </div>
    <br><br>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Video 1</h5>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Activado</label>
                        </div>
                        <p>//aqui pones el link de cada video</p>
                        <p class="card-text">//Descripción del video</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Video 2</h5>
                        <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Activado</label>
                        </div>
                        <p>//aqui pones el link de cada video</p>
                        <p class="card-text">//Descripción del video</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Video 3</h5>
                    <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Activado</label>
                    </div>
                    <p>//aqui pones el link de cada video</p>
                    <p class="card-text">//Descripción del video</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <div class="card-body">
                <h5 class="card-title">Video 4</h5>
                <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Activado</label>
                        </div>
                    <p>//aqui pones el link de cada video</p>
                    <p class="card-text">//Descripción del video</p>
                </div>
                </div>
            </div>
            </div>
    </div>
    <br><br><br>
    <footer style="background-color: #27A4D0; color: white">
    <hr style="border: 5px solid #0F4E9E;" class="mt-12">
        <div class="col-md-12 mx-auto text-center">
            <p class="pl-5 text-right">Hospício de Huérfanos de Cartago ©2020-2022</p>
            <p class="pl-5 text-right">IDS 2022</p>
        </div>
    </footer>  

        <!--MODAL AGREGAR VIDEO-->
        <div class="modal fade" id="modalDesactivarAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar Video</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Ingrese el Cedula</label>
                                            <input class="form-control" type="number" name="cedulabuscar" id="cedulabuscar" aria-label="default input example">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Desactivar</button>
                                </div>
                            </div>
                        </div>
                    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>