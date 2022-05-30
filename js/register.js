function disabledRegister(){
  button = document.getElementById('registerButton')
  if (button.disabled == true) {
    button.disabled = false
    button.classList.remove('disabled')
  }
  else {
    button.disabled = true
    button.classList.add('disabled')
  }
}