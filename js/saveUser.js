/*====================================================================================
                       Abrir la modal de registro | Header
======================================================================================*/

var btnAbrirReg= document.querySelector("#modalRegisOpen");
var modalShowR= document.querySelector("#main_modal");   
btnAbrirReg.addEventListener("click", ()=>{
    modalShowR.style.display="block";
});


/*====================================================================================
                       Abrir la modal de registro | Menu
======================================================================================*/

var btnAbrirRegMenu= document.querySelector("#modalRegistro-open2");
var modalShowRMenu= document.querySelector("#main_modal");   
btnAbrirRegMenu.addEventListener("click", ()=>{
    $("#sideBar").animate({ right: "-100%" }, "slow");
    $(".dark").css("display", "none");
     modalShowR.style.display="block";

});


/*====================================================================================
                       Abrir la modal de registro | Footer
======================================================================================*/

var btnAbrirRegFooter= document.querySelector("#registro3");
var modalShowRFooter= document.querySelector("#main_modal");   
btnAbrirRegFooter.addEventListener("click", ()=>{
    modalShowRFooter.style.display="block";
});



/*====================================================================================
                          Cerrando la modal de registro
======================================================================================*/

var btnCerrarReg= document.querySelector("#Registro-close");
var modalReg= document.querySelector("#main_modal");   
btnCerrarReg.addEventListener("click", ()=>{
    modalReg.style.display="none";
    document.getElementById("registroName").value="";
    document.getElementById("registroCelular").value="";
    document.getElementById("registroEmail").value="";
    document.getElementById("mensajeRegistrp").value="";
    document.getElementById("mensajeRegistrp").value="Deje un mensaje";

});

/*====================================================================================
                                Vaciando el text Area
======================================================================================*/

var mensajeRegistrp= document.querySelector("#mensajeRegistrp");
mensajeRegistrp.addEventListener("click", ()=>{
	let regexTexto = new RegExp("Deje un mensaje");
	let theTextContent=mensajeRegistrp.textContent;
	let theTextValue=mensajeRegistrp.value;

	if(regexTexto.test(theTextValue)){
	   mensajeRegistrp.textContent="";
       document.getElementById("mensajeRegistrp").value="";
    }
});
/*====================================================================================
                             VALIDAR FORMULARIO de trabajo
======================================================================================*/

// enviadno respuesta de enviar

$(document).ready(function () {
  $("#enviar-registro").click(function () {
    //VARIABLES inputs
    let NombreRegistro = document.getElementById("registroName").value;
    let numberTelephone = document.getElementById("registroCelular").value;
    let emailRegistro = document.getElementById("registroEmail").value;
    let textAreaRegis= document.getElementById("mensajeRegistrp").value;
    //variables para comparar 
    let miTlf = numberTelephone.length;
    let emailRegex = /\w+@\w+\.+[a-z]/;
    let tlfRegez=/^\d{9}$/;

    //validaciones| campos vacios
    if (
      NombreRegistro === "" ||
      numberTelephone === "" ||
      emailRegistro === "" ||
      textAreaRegis === "" 
    ) {
      swal({
        title: "¡Llene todos los datos!",
        icon: "warning",
        button: "Aceptar",
      });
    } else {
      if (!emailRegex.test(emailRegistro)) {
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
        textAreaRegis != "" &&     
        NombreRegistro != "" &&
        numberTelephone != "" &&
        emailRegistro != "" &&
        emailRegex.test(emailRegistro) &&
        miTlf == 9
      ) {

        let jsonData ={ name: `${NombreRegistro}`, tlf: `${numberTelephone}`, email: `${emailRegistro}`, msj: `${textAreaRegis}`};
        let url ='./fback/validation/registro.php';
        let jsonInfartion=JSON.stringify(jsonData);
        
        //enviando los datos al servirdo
        fetch(url, {
           method: 'POST',
           headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
           },
           body:`data=${jsonInfartion}`,
        })
       .then(res => res.text())
       .then(data =>{
           let patt = new RegExp("Usuario registrado");

            if (patt.test(data)) {
                swal({
                   title: "Felicidades",
                   text: "Sus datos fueron enviados satisfactoriamente.",
                   icon: "success",
                   button: "Aceptar",
                });
                document.getElementById("main_modal").style.display="none";
                document.getElementById("registroName").value="";
                document.getElementById("registroCelular").value="";
                document.getElementById("registroEmail").value="";
                document.getElementById("mensajeRegistrp").value="";
                document.getElementById("mensajeRegistrp").value="Deje un mensaje";
                
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
});
