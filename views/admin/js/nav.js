const shrink_btn = document.querySelector(".shrink-btn");
const sidebar_links = document.querySelectorAll(".sidebar-links a");
const active_tab = document.querySelector(".active-tab");
const shortcuts = document.querySelector(".sidebar-links h4");
const tooltip_elements = document.querySelectorAll(".tooltip-element");

let activeIndex;

shrink_btn.addEventListener("click", () => {
  document.body.classList.toggle("shrink");
  setTimeout(moveActiveTab, 400);

  shrink_btn.classList.add("hovered");

  setTimeout(() => {
    shrink_btn.classList.remove("hovered");
  }, 500);
});


//traer datos desde users.php y escribirlos en el html con ajax
function traerDatos(){
    $.ajax({
        url: 'php/users.php',
        type: 'GET',
        dataType: 'html',
        success: function(data){
            $('#usuariosAjax').html(data);
        }
    });
    $.ajax({
      url: 'php/crud.php',
      type: 'GET',
      dataType: 'html',
      success: function(data){
          $('#crudAjax').html(data);
      }
  });
}

traerDatos();

//========================================================================
//--------------------------- Editar Datos -------------------------------
//========================================================================


function editar(id,tabla){


  if (tabla == "usuarios"){
  document.getElementById('modalEditarUser').style.display = 'block';
  }else{
    document.getElementById('modalEditarCrud').style.display = 'block';
  }



  tr = document.getElementById(id);
 //obtener todos los td de la fila
  td = tr.getElementsByTagName('td');
  //obtener el valor de cada td
  user = td[0].children[0].innerHTML;
  mail = td[1].children[0].innerHTML;
  if (tabla == "usuarios"){
    phone = td[2].children[0].innerHTML;
    country = td[3].children[0].innerHTML;
  document.getElementById('phoneEdit').value = phone;
  document.getElementById('countryEdit').value = country;
  

  document.getElementById('tabla').value = tabla;
  document.getElementById('idEdit').value = id;
  document.getElementById('userEdit').value = user;
  document.getElementById('mailEdit').value = mail;
  }
  else{
    document.getElementById('tablaC').value = tabla;
    document.getElementById('idEditC').value = id;
    document.getElementById('userEditC').value = user;
    document.getElementById('mailEditC').value = mail;
  }


}

function editarEnviar(){

  tabla = document.getElementById('tabla').value

  if (tabla == "usuarios"){
    document.getElementById('modalEditarUser').style.display = 'none';
  }else{
    document.getElementById('modalEditarCrud').style.display = 'none';
  }
  
if (tabla == "usuarios"){
  id = document.getElementById('idEdit').value;
  user = document.getElementById('userEdit').value;
  mail = document.getElementById('mailEdit').value;
  phone = document.getElementById('phoneEdit').value;
  country = document.getElementById('countryEdit').value;

  datos = {
    'id': id,
    'user': user,
    'mail': mail,
    'phone': phone,
    'country': country,
    'tabla': tabla
  };

}else{
  id = document.getElementById('idEditC').value;
  user = document.getElementById('userEditC').value;
  mail = document.getElementById('mailEditC').value;

  datos = {
    'id': id,
    'user': user,
    'mail': mail,
    'tabla': tabla
  };
  
}





  $.ajax({
    url: 'php/edit.php',
    type: 'POST',
    data: datos,
    success: function(data){

      id = "";
      user = "";
      mail = "";
      phone = "";
      country = "";
      tabla = "";

      traerDatos();
      //sweat alert
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    
    Toast.fire({
        icon: 'success',
        title: 'Editado con exito'

    })
    }
  });

  
}

function cerrarEditar(){
  document.getElementById('modalEditarUser').style.display = 'none';
  document.getElementById('modalEditarCrud').style.display = 'none';

  document.getElementById('tabla').value = "";
  document.getElementById('idEdit').value = "";
  document.getElementById('userEdit').value = "";
  document.getElementById('mailEdit').value = "";
  document.getElementById('phoneEdit').value = "";
  document.getElementById('countryEdit').value = "";
}






//========================================================================
//--------------------------- Añadir Datos -------------------------------
//========================================================================


function añadir(){
  document.getElementById('modalCrear').style.display = 'block';
}

function cerrarCrear(){
  document.getElementById('modalCrear').style.display = 'none';
}

function crearEnviar(){
  document.getElementById('modalCrear').style.display = 'none';
  nombre = document.getElementById('nombreCrear').value;
  cantidad = document.getElementById('cantidadCrear').value;


  datos = {

    'nombre': nombre,
    'cantidad': cantidad,
  };

  $.ajax({
    url: 'php/crear.php',
    type: 'POST',
    data: datos,
    success: function(data){
      traerDatos();
      //sweat alert
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    
    Toast.fire({
        icon: 'success',
        title: 'Añadido con exito'

    })
    }
  });

  
}






//========================================================================
//--------------------------- Borrar Datos -------------------------------
//========================================================================


function avisoBorrar(id,tabla){
  Swal.fire({
    title: "¿Estas seguro?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3e1bb3",
    cancelButtonColor: "#adadad",
    confirmButtonText: "Borrar",
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
        borrar(id,tabla);
      Swal.fire(
        "Deleted!",
        "Your file has been deleted.",
        "success"
      )
    }
  })
}


function borrar(id,tabla){

  datos = {
    'id': id,
    'tabla': tabla

  };


  $.ajax({
    url: 'php/remove.php',
    type: 'POST',
    data: datos,
    success: function(data){
      traerDatos();
      //sweat alert
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    
    Toast.fire({
        icon: 'success',
        title: 'Borrado con exito'

    })
    }
  });

}



//========================================================================
//----------------------------------- Nav --------------------------------
//========================================================================


function moveActiveTab() {
  let topPosition = activeIndex * 58 + 2.5;

  if (activeIndex > 3) {
    topPosition += shortcuts.clientHeight;
  }

  active_tab.style.top = `${topPosition}px`;
}

function changeLink() {
  sidebar_links.forEach((sideLink) => sideLink.classList.remove("active"));
  this.classList.add("active");

  activeIndex = this.dataset.active;

  moveActiveTab();
}

sidebar_links.forEach((link) => link.addEventListener("click", changeLink));

function showTooltip() {
  let tooltip = this.parentNode.lastElementChild;
  let spans = tooltip.children;
  let tooltipIndex = this.dataset.tooltip;

  Array.from(spans).forEach((sp) => sp.classList.remove("show"));
  spans[tooltipIndex].classList.add("show");

  tooltip.style.top = `${(100 / (spans.length * 2)) * (tooltipIndex * 2 + 1)}%`;
}

tooltip_elements.forEach((elem) => {
  elem.addEventListener("mouseover", showTooltip);
});



function mostrarContenido(value){
  ocultarCrud = document.getElementById('crud');
  ocultarConfig = document.getElementById('config');
  ocultarUsers = document.getElementById('users');

  if (ocultarCrud.style.display = true) {
    ocultarCrud.style.display = 'none';
  }
  if (ocultarConfig.style.display = true) {
    ocultarConfig.style.display = 'none';
  }
  if (ocultarUsers.style.display = true) {
    ocultarUsers.style.display = 'none';
  }

  mostrar = document.getElementById(value);
  mostrar.style.display = 'block';

}