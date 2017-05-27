    function validaFormulario()
	 {
		  var mensajeError=true;
		  //alert(email.value);
		  emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
		  
		  claveRegex = /^[-\w.%+]{1,64}$/i;
           error_mail.innerHTML = "";
		   error_clave.innerHTML = "";
		   error_confirm_clave.innerHTML = "";	
 		   if ((!emailRegex.test(email.value)) || (email.value.length  == 0)) {
		     // mensaje.style.display = "inline";
		      error_mail.innerHTML = "Correo no valido";	
              mensajeError = false;
		   } 
	      
		    if ((!claveRegex.test(clave.value)) || (clave.value.length  == 0)) {
				 // mensaje.style.display = "inline";
				  error_clave.innerHTML = "Clave no valida!";	
				  mensajeError = false;
			}
			 
			if ((!claveRegex.test(confirmacion.value)) || (confirmacion.value.length  == 0)) {
				  //mensaje.style.display = "inline";
				  error_confirm_clave.innerHTML = "Clave no valida!";	
				  mensajeError = false;
			} else 
			 {	
		         if (confirmacion.value != clave.value) {
				   //mensaje.style.display = "inline";
				   error_confirm_clave.innerHTML = "Claves no coinciden";	
				   mensajeError = false;
			     }
			 }
			  				
			 
		   if (mensajeError)
		   {  
        		 
			 formulario.submit(); 
		   }   
	 }