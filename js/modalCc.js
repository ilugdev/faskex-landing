/*====================================================================================
                       Abrir la modal de contacto | menu
======================================================================================*/

var btnMenuCon= document.querySelector("#modal-open");
btnMenuCon.addEventListener("click", ()=>{
    $("#sideBar").animate({ right: "-100%" }, "slow");
    $(".dark").css("display", "none");
    $("#contactComercial").css("display", "block");

});


/*====================================================================================
                       Abrir la modal de contacto | Footer
======================================================================================*/

var btnMenuCon= document.querySelector("#contacto3");
btnMenuCon.addEventListener("click", ()=>{
   $("#contactComercial").css("display", "block");
});


/*====================================================================================
                          Cerrando la modal de contacto
======================================================================================*/

var btnCerrarC= document.querySelector("#cc_close");
var modaCont= document.querySelector("#contactComercial");   
btnCerrarC.addEventListener("click", ()=>{
    modaCont.style.display="none";
    document.getElementById("nombreContacto").value="";
    document.getElementById("tlfContacto").value="";
    document.getElementById("conctatoCorreo").value="";
    document.getElementById("contactoEmpresa").value="";
    document.getElementById("conctatoDireccion").value="";

});

/*====================================================================================
                             VALIDAR FORMULARIO DE CONTACTO
======================================================================================*/

// enviadno respuesta de enviar
var enviarContacto= document.querySelector("#enviar_contacto");
  enviarContacto.addEventListener("click", ()=>{
    //VARIABLES inputs
    //VARIABLES inputs
    let nameCont = document.getElementById("nombreContacto").value;
    let conTlf = document.getElementById("tlfContacto").value;
    let contEmail = document.getElementById("conctatoCorreo").value;
    let empresa= document.getElementById("contactoEmpresa").value;
    let direccion= document.getElementById("conctatoDireccion").value;
  
    //variables para comparar 
    let miTlf = conTlf.length;
    let emailRegex = /\w+@\w+\.+[a-z]/;

    //validaciones| campos vacios
    if (nameCont === "" ||
      conTlf === "" ||
      contEmail === "" ||
      empresa === "" ||
      direccion === ""
    ) {
      swal({
        title: "¡Llene todos los datos!",
        icon: "warning",
        button: "Aceptar",
      });
    } else {
      if (!emailRegex.test(contEmail)) {
        swal({
          title: "Formato de correo no valido",
          icon: "warning",
          button: "Aceptar",
        });

        if (miTlf <= 8) {
          swal({
            title: "Formato de tlf no valido",
            icon: "warning",
            button: "Aceptar",
          });
        }
      }

      if (
        direccion != "" && 
        empresa != "" &&    
        nameCont != "" &&
        conTlf != "" &&
        contEmail != "" &&
        emailRegex.test(contEmail) &&
        miTlf == 9
      ) {

        let dataJSon = { 
             name: `${nameCont}`, 
             company: `${empresa}`, 
             address: `${direccion}`, 
             tlf: `${conTlf}`, 
             email: `${contEmail}`
            };
        let jsonInfartion = JSON.stringify(dataJSon);
        let url ='./fback/mailins/CommercialContact/datosPost.php';

        //enviando los datos al servirdo
        fetch(url, {
          method: 'POST',
          headers: {
           'Content-Type': 'application/x-www-form-urlencoded'
          },
          body:`data=${jsonInfartion}`
       })
      .then(res => res.text())
      .then(data =>{
          let patt = new RegExp("Solicitud enviada");

           if (patt.test(data)) {
               swal({
                  title: "Felicidades",
                  text: "Sus datos fueron enviados satisfactoriamente.",
                  icon: "success",
                  button: "Aceptar",
               });
               document.getElementById("contactComercial").style.display="none";
               document.getElementById("nombreContacto").value="";
               document.getElementById("tlfContacto").value="";
               document.getElementById("conctatoCorreo").value="";
               document.getElementById("contactoEmpresa").value="";
               document.getElementById("conctatoDireccion").value="";
               
           }else{
               swal({
                 title: "Algo salio mal",
                 text: data,
                 icon: "error",
                 button: "Aceptar",
             });
           }          
       });     
 



      }

    }

});

