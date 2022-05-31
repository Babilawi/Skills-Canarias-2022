function disabledRegister(){
  button = document.getElementById('registerButton')
  check = document.getElementById('registerCheck')

  if(check.checked){
    button.disabled = false
    button.classList.remove('disabled')
  }else{
    button.disabled = true
    button.classList.add('disabled')
  }
}

function error(){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 0,
    timerProgressBar: true,
    didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

Toast.fire({
    icon: 'error',
    title: 'error'

})
}