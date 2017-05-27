    function validaFormulario()
	 {
		  var mensajeError=true;
		  
		  label_mensajeEmail.innerHTML = "";
		  label_mensajePassword.innerHTML = "";
		  //alert(email.value);
		  emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
		  
		  claveRegex = /^[-\w.%+]{1,64}$/i;
         
 		   if ((!emailRegex.test(email.value)) || (email.value.length  == 0)) {
		      label_mensajeEmail.innerHTML = "Ingrese un Correo válido";	
              mensajeError = false;
		   }
		   if ((!claveRegex.test(clave.value)) || (clave.value.length  == 0)) {
				  label_mensajePassword.innerHTML = "Ingrese una Clave válida";	
				  mensajeError = false;
		   } 			
		
			 
		  if (mensajeError)
			  formulario.submit(); 

	 }