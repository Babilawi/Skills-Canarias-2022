

function validation(){

    var error = 0;
    var errores = "";

    var email = document.getElementById("mail");
    var password = document.getElementById("pass");
    var form = document.getElementById("login");


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
        else{
            password.style.borderBottom = "1px solid #270597";
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