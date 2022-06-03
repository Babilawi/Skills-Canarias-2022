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


//traer datos desde data.php y escribirlos en el html con ajax
function traerDatos(){
    $.ajax({
        url: 'php/data.php',
        type: 'GET',
        dataType: 'html',
        success: function(data){
            $('#usuariosAjax').html(data);
        }
    });
}

traerDatos();


function editar(id){
  tr = document.getElementById(id);
 //obtener todos los td de la fila
  td = tr.getElementsByTagName('td');
  //obtener el valor de cada td
  user = td[0].children[0].value;
  mail = td[1].children[0].value;
  phone = td[2].children[0].value;
  country = td[3].children[0].value;
  console.log(user, mail, phone, country);
 

  //crear un objeto con los datos
  datos = {
    'id': id,
    'user': user,
    'mail': mail,
    'phone': phone,
    'country': country
  };

  //enviar los datos al servidor
  $.ajax({
    url: 'php/edit.php',
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
        title: 'Editado con exito'

    })
    }
  });
}

function avisoBorrar(id){
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
        borrar(id);
      Swal.fire(
        "Deleted!",
        "Your file has been deleted.",
        "success"
      )
    }
  })
}

function borrar(id){

  datos = {
    'id': id,

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