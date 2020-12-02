
/*====================================================================================
                             VALIDAR FORMULARIO DE CONTACTO
======================================================================================*/

// enviadno respuesta de enviar
document.querySelector("#cc_Send").addEventListener("click", ()=>{
    //VARIABLES inputs
    let form= document.querySelector("#formCC");
    let dataFormulario=new FormData(form);
    let name = document.querySelector("#nombreCC").value;
    let tlf = document.querySelector("#tlfCC").value;
    let email = document.querySelector("#emailCC").value;
    let ruc= document.querySelector("#ccRuc").value;
    let rubro= document.querySelector("#ccRubro").value;
    let direccion= document.querySelector("#ccDireccion").value;
    let consulta=dataFormulario.get('consulta');

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
           rubro:`${rubro}`, 
           direccion:`${direccion}`,
           tlfLength:`${miTlf}`,
           consulta:`${consulta}`
    };

    if(name ==="" ||
    tlf ==="" ||
    email ==="" ||
    ruc ==="" ||
    rubro ==="" ||
    direccion ==="" 
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
      rubro !="" &&
      direccion !="" && 
      miRuc ==11 &&
      miTlf == 9 &&
      emailRegex.test(email)
  ){
    //variables data
    let DataJson= JSON.stringify(objeto);
    let url ='./fback/contact/contacto_nvcc.php';

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
            document.querySelector("#nombreCC").value="";
            document.querySelector("#tlfCC").value="";
            document.querySelector("#emailCC").value="";
            document.querySelector("#ccRuc").value="";
            document.querySelector("#ccRubro").value="";
            document.querySelector("#ccDireccion").value="";
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

