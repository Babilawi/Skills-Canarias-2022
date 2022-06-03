

function validation(){

    var error = 0;
    var errores = "";

    var name = document.getElementById("user");
    var email = document.getElementById("mail");
    var password = document.getElementById("pass1");
    var password_confirmation = document.getElementById("pass2");
    var phone = document.getElementById("phone");
    var city = document.getElementById("city");
    var country = document.getElementById("country");
    var form = document.getElementById("registro");




    // =================================================
    // ---------------- User validation ----------------
    // =================================================

        if(name.value == ""){
            name.style.borderBottom = "1px solid red";
            error++;
            errores += "<li>El usuario esta vacio</li>";
        
        }
        else if(name.value.length < 5){
            name.style.borderBottom = "1px solid red";
            error++;
            errores += "<li>El usuario debe tener al menos 5 caracteres</li>";
        }
        else if(name.value.length > 20){
            name.style.borderBottom = "1px solid red";
            error++;
            errores += "<li>El usuario debe tener menos de 20 caracteres</li>";
        }
        else if (!/^[a-zA-Z0-9]*$/.test(name.value)) {
            name.style.borderBottom = "1px solid red";
            error++;
            errores += "<li>El usuario solo puede contener letras y numeros</li>";
        }
        else{
            name.style.borderBottom = "1px solid #270597";
        }


    // =================================================    
    // ---------------- Email validation ---------------
    // =================================================

        if(email.value == ""){
            email.style.borderBottom = "1px solid red";
            error++;
            errores += "<li>El correo esta vacio</li>";
        }
        else if(!/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(email.value)){
            email.style.borderBottom = "1px solid red";
            error++;
            errores += "<li>El correo no es valido</li>";
        }
        else{
            email.style.borderBottom = "1px solid #270597";
        }

    // =====================================================
    // ---------------- Password validation ----------------
    // =====================================================

        if(password.value == ""){
            password.style.borderBottom = "1px solid red";
            error++;
            errores += "<li>La contraseña esta vacia</li>";
        }
        else if(password.value.length < 6){

            password.style.borderBottom = "1px solid red";
            error++;
            errores += "<li>La contraseña debe tener al menos 6 caracteres</li>";
        }
        else{
            password.style.borderBottom = "1px solid #270597";
        }

        if(password_confirmation.value == ""){
            password_confirmation.style.borderBottom = "1px solid red";
            error++;
            errores += "<li>La contraseña de confirmación esta vacia</li>";
        }
        else if(password_confirmation.value != password.value){
            password_confirmation.style.borderBottom = "1px solid red";
            error++;
            errores += "<li>Las contraseñas no coinciden</li>";
        }
        else{
            password_confirmation.style.borderBottom = "1px solid #270597";
        }








    // ========================================
    // ---------------- Result ----------------
    // ========================================


        if (error >= 1 ) {
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
                title: errores
        
            })
        }else{
            form.submit();
        }



}