function crearTarea() {}

function completarTarea() {}

function actualizarTarea() {}

function eliminarTarea() {}

fetch("task.json")
  .then(function (response) {
    return response.json();
  })
  .then(function (tasks) {
    let placeholder = document.querySelector("#task_cards");
    let out = "";

    for (let task of tasks) {
      out += `
      <div class="col-md-4">
      <div class="jumbotron card card-block">
        <h2 class="text-uppercase">
        ${task.tipo_tarea}
        </h2>
        <h4 class="font-weight-bold">
          ${task.titulo_tarea}
        </h4>
        <p>
        ${task.detalle_tarea}
        </p>
        <span class="pb-3 text-right font-weight-light">Duración : ${task.tiempo_conclucion} horas</span>
        <p>
          <button id="completar_tarea" onclick="completarTarea();" class="btn btn-primary btn-large m-1"
            href="#">completar</button>
          <button id="actualizar_tarea" onclick="actualizarTarea();" class="btn btn-success btn-large m-1"
            href="#">actualizar</button>
          <button id="eliminar_tarea" onclick="eliminarTarea();" class="btn btn-danger btn-large m-1"
            href="#">eliminar</button>
        </p>
      </div>
    </div>
    `;
    }
    placeholder.innerHTML = out;
  });
