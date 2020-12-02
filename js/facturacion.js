
/*====================================================================================
                             VALIDAR FORMULARIO DE CONTACTO
======================================================================================*/

// enviadno respuesta de enviar
document.querySelector("#facturacion_Send").addEventListener("click", ()=>{
    //VARIABLES inputs
    let name = document.querySelector("#facturacionName").value;
    let tlf = document.querySelector("#facturacionTlf").value;
    let email = document.querySelector("#facturacionEmail").value;
    let msg= document.querySelector("#facturacionMensaje").value; 
    let ruc= document.querySelector("#facturacionRuc").value;
    let serie= document.querySelector("#facturacionSerie").value;
    let serieNumber= document.querySelector("#facturacionSerieNumber").value;
    let serviceType= document.querySelector("#facturacionServiceType").value;
    
    //variables para comparar 
    let miRuc = ruc.length;
    let miTlf = tlf.length;
    let emailRegex = /\w+@\w+\.+[a-z]/

    //objeto testing
    let objeto={
           name:`${name}`,
           tlf:`${tlf}`, 
           email:`${email}`, 
           ruc:`${ruc}`,
           msg:`${msg}`, 
           serie:`${serie}`,
           serieNumber:`${serieNumber}`,
           serviceType:`${serviceType}`
    };

    if(name ==="" ||
    tlf ==="" ||
    email ==="" ||
    ruc ==="" ||
    msg ==="" ||
    serie ==="" ||
    serieNumber ==="" ||
    serviceType ==="" 
    ){
     swal({
        title: "¡Llene todos los datos!",
        icon: "warning",
        button: "Aceptar",
     });
     console.log(objeto);
    }else{
      //verificando formato del correo
        if (!emailRegex.test(email)){
            swal({
                title: "Formato de correo no valido",
                icon: "warning",
                button: "Aceptar",
            });
        }
      //contando el numero de caracteres del tlf
        if (miTlf <= 8) {
            swal({
              title: "Formato de tlf no valido",
              icon: "warning",
              button: "Aceptar",
            });
          }
      //contando el numero de caracteres del tlf
        if (miRuc < 11 || miRuc > 11) {
            swal({
              title: "numero de Ruc no valido",
              icon: "warning",
              button: "Aceptar",
            });
        }
    }
  //validando todos los datos
  if( name !="" &&
      tlf !="" &&
      email !="" &&
      ruc !="" &&
      msg !="" &&
      serie !="" && 
      serieNumber !="" && 
      serviceType !="" && 
      miRuc ==11 &&
      miTlf == 9 &&
      emailRegex.test(email)
  ){
    //variables data
    let DataJson= JSON.stringify(objeto);
    let url ='./fback/contact/contacto_fact.php';

    //enviando los datos al servirdo
    fetch(url, {
        method: 'POST',
        headers: {
         'Content-Type': 'application/x-www-form-urlencoded'
        },
        body:`data=${DataJson}`
    })
    .then(res => res.text())
    .then(data =>{
        let patt = new RegExp("Consulta enviada");

         if (patt.test(data)) {
             swal({
                title: "Felicidades",
                text: "Sus datos fueron enviados satisfactoriamente.",
                icon: "success",
                button: "Aceptar",
             });
               document.querySelector("#facturacionName").value="";
               document.querySelector("#facturacionTlf").value="";
               document.querySelector("#facturacionEmail").value="";
               document.querySelector("#facturacionMensaje").value=""; 
               document.querySelector("#facturacionRuc").value="";
               document.querySelector("#facturacionSerie").value="";
               document.querySelector("#facturacionSerieNumber").value="";
               document.querySelector("#facturacionServiceType").value="";
               console.log(data);

         }else{
             swal({
               title: "Algo salio mal",
               text: data,
               icon: "error",
               button: "Aceptar",
           });
           console.log(data);
         }          
     });      
  }
});
