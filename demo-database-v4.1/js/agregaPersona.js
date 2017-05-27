    function validaFormulario()
	 {
		  var mensajeError=true;
		  //alert(email.value);
		   emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
		  
		   claveRegex = /^[-\w.%+]{1,64}$/i;
		   textoRegex = /^[a-zA-Z\s]*$/;
		   numRegex = /^\d*$/;

		   
           error_rut.innerHTML = "";
		   error_nombre.innerHTML = "";
		   error_apellido.innerHTML = "";	
		   error_fechaNacimiento.innerHTML = "";
		   error_mail.innerHTML = "";
		   
		   
		   if ((!numRegex.test(rut.value)) || (rut.value.length > 8) || (rut.value.length < 7) ) {
		     // mensaje.style.display = "inline";
		      error_rut.innerHTML = "Rut no valido";	
              mensajeError = false;
		   } 
		 
 		   if ((!textoRegex.test(nombre.value)) || (nombre.value.length==0)) {
		     // mensaje.style.display = "inline";
		      error_nombre.innerHTML = "Nombre no valido";	
              mensajeError = false;
		   } 
		   
		   if ((!textoRegex.test(apellido.value)) || (apellido.value.length==0)) {
		     // mensaje.style.display = "inline";
		      error_apellido.innerHTML = "Apellido no valido";	
              mensajeError = false;
		   } 
		 
			if ((!emailRegex.test(email.value)) || (email.value.length ==0)) {
		     // mensaje.style.display = "inline";
		      error_mail.innerHTML = "Correo no valido";	
              mensajeError = false;
		   }   				
			 
			 
		   if (mensajeError)
		   {  
        	  formulario.submit(); 
		   }   
	 }