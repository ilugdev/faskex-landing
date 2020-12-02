
/*====================================================================================
                             VALIDAR FORMULARIO DE CONTACTO
======================================================================================*/

// enviadno respuesta de enviar
document.querySelector("#sw_Send").addEventListener("click", ()=>{
    //VARIABLES inputs
    let name = document.querySelector("#swName").value;
    let tlf = document.querySelector("#swTlf").value;
    let email = document.querySelector("#swEmail").value;
    let msg= document.querySelector("#swMsg").value; 
    
    //variables para comparar 
    let miTlf = tlf.length;
    let emailRegex = /\w+@\w+\.+[a-z]/

    //objeto testing
    let objeto={
           name:`${name}`,
           tlf:`${tlf}`, 
           email:`${email}`, 
           msg:`${msg}`
    };

    if(name ==="" ||
    tlf ==="" ||
    email ==="" ||
    msg ===""
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
    }
  //validando todos los datos
  if( name !="" &&
      tlf !="" &&
      email !="" &&
      msg !="" &&
      miTlf == 9 &&
      emailRegex.test(email)
  ){
    //variables data
    let DataJson= JSON.stringify(objeto);
    let url ='./fback/contact/contacto_sw.php';

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
              document.querySelector("#swName").value="";
              document.querySelector("#swTlf").value="";
              document.querySelector("#swEmail").value="";
              document.querySelector("#swMsg").value=""; 
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
