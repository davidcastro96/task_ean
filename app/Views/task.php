<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href=<?php echo base_url('/css/styleTasks.css'); ?>>
  <title>Task</title>
</head>

<body>
  <div class="app container-fluid p-3">
    <!-- <div id="_sinTarea">
      <h1 class="display-4"></h1>
    </div> -->
    <button id="addNew" type="button" class="btn btn-info btn-large btn-up btn-flotante" data-bs-toggle="modal" data-bs-target="#form">
      +
    </button>

    <div class="nav-wrapper">
      <nav>
        <div class="navigation">
          <ul class="nav-items">
            <li><a href="<?php echo base_url('/google_maps') ?>">Google Maps</a></li>
            <li><a href="<?php echo base_url('/crimenes_chicago') ?>">Crimenes chicago</a></li>
            <li><a href="<?php echo base_url('/signoff') ?>">Salir</a></li>
          </ul>
          <div class="nav-toogler"></div>
        </div>
      </nav>
    </div>

    <!-- Modal -->
    <form class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Agregar nueva tarea
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Título</p>
            <input type="text" class="form-control" id="titulo_nueva_tarea" autocomplete="off">
            <div id="msg"></div>
            <br>
            <p>Detalle</p>
            <input type="text" class="form-control" id="detalle_nueva_tarea" autocomplete="off">
            <br>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text">Tipo de tarea</label>
              </div>
              <select class="custom-select" id="select_tipo_nueva_tarea">
                <option selected>seleccione...</option>
                <option value="trabajo">trabajo</option>
                <option value="personal">personal</option>
                <option value="estudio">estudio</option>
              </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text">Tiempo que tomarías en terminarla</label>
              </div>
              <select class="custom-select" id="conclucion_nueva_tarea">
                <option selected>seleccione...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
            <button id="add" class="btn btn-primary">Añadir</button>
          </div>
        </div>
      </div>
    </form>
    <!-- app con JS -->
    <div id="tasks" class="row"></div>
  </div>
  <script src="<?php echo base_url('js/scripts.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>