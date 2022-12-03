let form = document.getElementById("form");
/* datos para las tareas */
let titulo_nueva_tarea = document.getElementById("titulo_nueva_tarea");
let detalle_nueva_tarea = document.getElementById("detalle_nueva_tarea");
let tipo_tarea = document.getElementById("select_tipo_nueva_tarea");
let tiempo_conclucion = document.getElementById("conclucion_nueva_tarea");
/* -- */
let msg = document.getElementById("msg");
let tasks = document.getElementById("tasks");
let add = document.getElementById("add");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  formValidation();
});

let formValidation = () => {
  if (
    titulo_nueva_tarea.value === "" ||
    detalle_nueva_tarea === "" ||
    tipo_tarea === "" ||
    tiempo_conclucion == ""
  ) {
    alert("No están los datos completos, ingreselos todos");
  } else {
    console.log("success");
    msg.innerHTML = "";
    acceptData();
    add.setAttribute("data-bs-dismiss", "modal");
    add.click();

    (() => {
      add.setAttribute("data-bs-dismiss", "");
    })();
  }
};

let data = [{}];

let acceptData = () => {
  data.push({
    titulo: titulo_nueva_tarea.value,
    detalle: detalle_nueva_tarea.value,
    tipo: select_tipo_nueva_tarea.value,
    conclucion: tiempo_conclucion.value,
  });

  localStorage.setItem("data", JSON.stringify(data));

  //console.log(data);
  createTasks();
};

let createTasks = () => {
  tasks.innerHTML = "";
  data.map((x, y) => {
    return (tasks.innerHTML += `
    <div class="col-md-4">
      <div class="jumbotron card card-block">
        <span id="id" hidden="hidden">${y}</span>
        <h2 id="tipo_tarea" class="text-uppercase">${x.tipo}</h2>
        <h4 id="titulo_tarea" class="font-weight-bold">${x.titulo}</h4>
        <p id="detalle_tarea">${x.detalle}</p>
        <h5 class="pb-3 text-right font-weight-light">horas</h5>
        <span class="pb-3 text-right font-weight-light">${x.conclucion}</span>
        <p>
          <button type="submit" onClick="editTask(this)" data-bs-toggle="modal" data-bs-target="#form" class="btn btn-success btn-large m-1">actualizar</button>
          <button type="button" onClick="deleteTask(this);" class="btn btn-danger btn-large m-1">eliminar</button>
        </p>
      </div>
    </div>
    `);
  });
  resetForm();
};

let deleteTask = (e) => {
  e.parentElement.parentElement.remove();
  data.splice(e.parentElement.parentElement.id, 1);
  localStorage.setItem("data", JSON.stringify(data));
  console.log(data);
};

let editTask = (e) => {
  let selectedTask = e.parentElement.parentElement;

  select_tipo_nueva_tarea.value = selectedTask.children[1].innerHTML;
  titulo_nueva_tarea.value = selectedTask.children[2].innerHTML;
  detalle_nueva_tarea.value = selectedTask.children[3].innerHTML;
  tiempo_conclucion.value = selectedTask.children[5].innerHTML;

  deleteTask(e);
};

let resetForm = () => {
  titulo_nueva_tarea.value = "";
  detalle_nueva_tarea.value = "";
  select_tipo_nueva_tarea.value = "";
  tiempo_conclucion.value = "";
};

(() => {
  data = JSON.parse(localStorage.getItem("data")) || [];
  createTasks();
})();

let navWrapper = document.querySelector(".nav-wrapper"),
  navToogler = document.querySelector(".nav-toogler");

navToogler.addEventListener("click", function (event) {
  navWrapper.classList.toggle("active");
});
