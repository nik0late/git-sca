<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Actualizar, Eliminar, Agregar</title>
    <!-- BOOTSTRAP 4  -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
  </head>
  <body>

    <!-- NAVEGACION  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">USUARIOS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0">
            <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
      </div>
    </nav>

    <div class="container">
      <div class="row p-4">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <!-- FORM TO ADD TASKS -->
              <form id="task-form">
                <div class="form-group">
                  <input type="text" id="name" placeholder="Name" class="form-control">
                </div>
                <div class="form-group">
                  <textarea id="description" cols="30" rows="10" class="form-control" placeholder="Descripcion"></textarea>
                </div>
                <input type="hidden" id="taskId">
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Guardar Usuario
                </button><br>
                </form>
                <button type="index.html" class="btn btn-primary btn-block text-center">
                  Regresar
                </button><br>
              </form>
            </div>
          </div>
        </div>

        <!-- TABLA  -->
        <div class="col-md-7">
          <div class="card my-4" id="task-result">
            <div class="card-body">
              <!-- BUSCAR -->
              <ul id="container"></ul>
            </div>
          </div>

          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Descripción</td>
              </tr>
            </thead>
            <tbody id="tasks"></tbody>
          </table>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <!-- Logica de interfaz -->
    <script src="app.js"></script>
  </body>

</html>
