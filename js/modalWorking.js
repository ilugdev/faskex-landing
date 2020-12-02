
/*====================================================================================
                       Abrir la modal de trabaja con nostros
======================================================================================*/

var btnMenuCon= document.querySelector("#open_jobs");
var modalShowC= document.querySelector("#modalJobs");   
btnMenuCon.addEventListener("click", ()=>{
  modalShowC.style.display="block";
});


/*====================================================================================
                          Cerrando la modal de trabaja con nostros
======================================================================================*/

var btnCerrarC= document.querySelector("#jobs-close");
var modaCont= document.querySelector("#modalJobs");   
btnCerrarC.addEventListener("click", ()=>{
    modaCont.style.display="none";
    document.getElementById("workingName").value="";
    document.getElementById("workingTlf").value="";
    document.getElementById("workingEmail").value="";
    document.getElementById("typeWork").value="";
    document.getElementById("cv").value="";
    document.getElementById("contendedor-input").style.backgroundColor = "rgba(255, 99, 71, 0)";
    document.getElementById("cv").classList.remove("bloqueo");
    document.getElementById("text-input").innerHTML = "* Adjuntar C.V";
    document.getElementById("contendedor-input").classList.remove("bloqueo");
    $("#text-input").css("color", "#92ABB1");
    document.getElementById("enviar_jobs").classList.add("opacity-25");
    document.getElementById("enviar_jobs").classList.add("bloqueo");



});


/*====================================================================================
                          VALIDAR FORMATO Y PESO DEL CV
======================================================================================*/

$(document).ready(function(){
  $('#cv').change(function() {
   //VARIABLES DECLARADAS
     let expresiones=/\w+@\w+\.+[a-z]/;
     let cvRegex=/(.pdf|.doc|.docx)$/i;
     let cv= document.getElementById("cv");             
     let valorCv= document.getElementById("cv").value;
     let fileSize = $('#cv')[0].files[0].size;
     let siezekiloByte = parseInt(fileSize / 1024);


     if (!cvRegex.test(valorCv)) {
         swal({
             title: "Error",
             text: "El formato del archivo no es valido",
             icon: "error",
             button: "Aceptar",
         }); 

        //vaciando la imagen           
           document.getElementById("cv").value="";
         }else{

             if (siezekiloByte > 1024) {
                 swal({
                    title: "Archivo muy pesado",
                    text: "El archivo debe ser menor a 1 mb",
                    icon: "error",
                    button: "Aceptar",
                 }); 

           }else{
            document.getElementById("contendedor-input").style.backgroundColor = "#ffcc28";
            document.getElementById("text-input").innerHTML = "Cv adjuntado";
            $("#text-input").css("color", "#000");                      
            document.getElementById("contendedor-input").classList.add("bloqueo");
            document.getElementById("cv").classList.add("bloqueo");
            document.getElementById("enviar_jobs").classList.remove("bloqueo");
            document.getElementById("enviar_jobs").classList.remove("opacity-25");


           }
         }
    });
});
/*====================================================================================
                             VALIDAR FORMULARIO de trabaja con nostros
======================================================================================*/

// enviadno respuesta de enviar

$(document).ready(function () {
  $("#enviar_jobs").click(function () {
    //VARIABLES inputs
    let workingName = document.getElementById("workingName").value;
    let workingTlf = document.getElementById("workingTlf").value;
    let workingEmail = document.getElementById("workingEmail").value;
    let typeWork= document.getElementById("typeWork").value;
    let cv= document.getElementById("cv").value;
    //variables para comparar 
    let miTlf = workingTlf.length;
    let emailRegex = /\w+@\w+\.+[a-z]/;
    let cvRegex=/(.pdf|.doc|.docx)$/i;
    let fileSize = $('#cv')[0].files[0].size;
    let siezekiloByte = parseInt(fileSize / 1024);

    //validaciones| campos vacios
    if (
      workingName === "" ||
      workingTlf === "" ||
      workingEmail === "" ||
      typeWork === "" ||
      cv === ""
    ) {
      swal({
        title: "¡Llene todos los datos!",
        icon: "warning",
        button: "Aceptar",
      });
    } else {

      if (!emailRegex.test(workingEmail)) {
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

        if(!cvRegex.test(cv)){
          swal({
          title: "El formato del archivo no es valido debe subir PDF o Docs",
          icon: "warning",
          button: "Aceptar",
         });
         }

         if(siezekiloByte > 1024){
          swal({
          title: "El archivo es muy pesado",
          icon: "warning",
          button: "Aceptar",
         });
         }
      }

      if (
        workingName != "" && 
        workingTlf != "" &&    
        cv != "" &&
        workingEmail != "" &&
        typeWork != "" &&
        emailRegex.test(workingEmail) &&
        miTlf == 9 &&
        cvRegex.test(cv) &&
        siezekiloByte < 1024
      ) {

        let url ='./fback/working/workingTogether.php'
        let formData = new FormData();
        let userCv = document.querySelector("#cv").files[0];
          formData.append("cv", userCv);
          formData.append("name", workingName); 
          formData.append("jobs", typeWork); 
          formData.append("email", workingEmail); 
          formData.append("tlf", workingTlf ); 


        //enviando los datos al servirdo
        fetch(url, {
            method: 'POST',
            body: formData,
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
               document.getElementById("modalJobs").style.display="none";
               document.getElementById("workingName").value="";
               document.getElementById("workingTlf").value="";
               document.getElementById("workingEmail").value="";
               document.getElementById("typeWork").value="";
               document.getElementById("cv").value="";
               document.getElementById("contendedor-input").style.backgroundColor = "rgba(255, 99, 71, 0)";
               document.getElementById("cv").classList.remove("bloqueo");
               document.getElementById("text-input").innerHTML = "* Adjuntar C.V";
               document.getElementById("contendedor-input").classList.remove("bloqueo");
               $("#text-input").css("color", "#92ABB1");
               document.getElementById("enviar_jobs").classList.add("opacity-25");
               document.getElementById("enviar_jobs").classList.add("bloqueo");
               
           }else{
               swal({
                 title: "Algo salio mal",
                 text: data,
                 icon: "error",
                 button: "Aceptar",
             });
             console.log(dataJSon);
             console.log(formData);

           }          
       });     
      }
    }
  });
});
