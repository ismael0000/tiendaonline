function validarFormulario(){
			var nombre=document.forms["formLogin"]["nombre"].value;
			var apellidos=document.forms["formLogin"]["apellidos"].value;
			var direccion=document.forms["formLogin"]["direccion"].value;
			var cp=document.forms["formLogin"]["cp"].value;
			var telefono=document.forms["formLogin"]["telefono"].value;
			var email=document.forms["formLogin"]["email"].value;
			var usuario=document.forms["formLogin"]["usuario"].value;
			var contrasenya=document.forms["formLogin"]["contrasenya"].value;			
			
			
			if (nombre==null || nombre=="" || apellidos==null || apellidos=="" || direccion==null || direccion=="" || cp==null || cp=="" || telefono==null || telefono=="" || email==null || email=="" || usuario==null || usuario=="" || contrasenya==null || contrasenya==""){
				alert ("Te faltan datos o los que has introducido no son correctos.");
			}
		/*
			if (/^[a-zA-Z]{3,}$/.test(formLogin.nombre.value && /^[a-zA-Z]{3,}$/.test(formLogin.apellidos.value)){
				return true;
			}else{
				alert("Revisa que no hayas puesto números u otros símbolos en el nombre o los apellidos.");
				return false;
			}
			*/	
			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(formLogin.email.value)){  
				return true;  
			} else{ 
				alert("El email introducido no es válido.")  
				return false;
			}
			/*
			if(/^[0-9]{5}$/.test(formLogin.cp.value)){
				return true;
			}else{
				alert("El código postal no es válido.");
				return false;
			}*/
			/*
			if(/^\d{8,9}$/.test(formLogin.telefono.value)){
				return true;
			}else{
				alert("El número de teléfono no es válido.");
				return false;
			}*/
		}
		
//codigo ajax para agregar un order a la tabla orders
//FunciÃ³ per instanciar l'objecte
function instanciacioXMLHTTPRequest(){
	try{
		var peticio=new XMLHttpRequest();
	}catch(err1){
		try{
			var peticio=new ActiveXObject("Msxml2.XMLHTTP");
		}catch(err2){
			try{
				var peticio=new ActiveXObject("Microsoft.XMLHTTP");
			}catch(err3){
				var peticio=false;
			}
		}
	}
	return peticio;
}

//FunciÃ³ per enviar les dades al servidor i processar la seva resposta
function enviar() {
	
   
   //Instanciem objecte XMLHttpRequest.
   peticio=instanciacioXMLHTTPRequest();   
   
   //Obrim la connexiÃ³ amb el servidor
   peticio.open("POST","../controller/confirmOrder.php",true);
   
   //Creem capÃ§aleres per que s'accepti post amb setRequestHeader:
      
   //Tipus de contingut. Ãšnica obligatÃ²ria
   peticio.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   //Longitu cadena post en bytes
   peticio.setRequestHeader("Content-length", cadenaPost.length);
   //Tancar connexiÃ³ un cop trameses les dades
   peticio.setRequestHeader("Connection", "close"); 
   
}
