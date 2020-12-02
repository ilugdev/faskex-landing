/*====================================================================================
                          VALIDAR FORMATO Y PESO DEL CV
======================================================================================*/

$(document).ready(function(){
  $('#archivoContact_Ac').change(function() {
   //VARIABLES DECLARADAS
     let expresiones=/\w+@\w+\.+[a-z]/;
     let fileDocRegex=/(.png|.jpg|.jpeg|.pdf|.doc|.docx)$/i;
     let valorFileDoc= document.getElementById("archivoContact_Ac").value;
     let fileSize = $('#archivoContact_Ac')[0].files[0].size;
     let siezekiloByte = parseInt(fileSize / 1024);


     if (!fileDocRegex.test(valorFileDoc)) {
         swal({
             title: "Error",
             text: "El formato del archivo no es valido",
             icon: "error",
             button: "Aceptar",
         }); 

        //vaciando la imagen           
           document.getElementById("archivoContact_Ac").value="";
         }else{

             if (siezekiloByte > 1024) {
                 swal({
                    title: "Archivo muy pesado",
                    text: "El archivo debe ser menor a 1 mb",
                    icon: "error",
                    button: "Aceptar",
                 }); 

           }else{                  

            document.querySelector("#contenedorFile").classList.add("bloqueo");
            document.querySelector("#archivoContact_Ac").classList.add("bloqueo");
            document.querySelector("#textfile").innerHTML = "Adjuntado"
            document.querySelector("#contenedorFile").classList.add("bg-yellow");
            document.querySelector("#textfile").classList.remove("textInput");
            document.getElementById("textfile").classList.add("text-black");
            document.querySelector("#enviar_sac").classList.remove("bloqueo");
            document.querySelector("#enviar_sac").classList.remove("opacity-25");
           }
         }
    });
});
/*====================================================================================
                             VALIDAR FORMULARIO de trabaja con nostros
======================================================================================*/

// enviadno respuesta de enviar

$(document).ready(function () {
  $("#enviar_sac").click(function () {
    //VARIABLES inputs
    let sacName = document.getElementById("sacName").value;
    let sacTlf = document.getElementById("sacTlf").value;
    let sacEmail = document.getElementById("sacEmail").value;
    let sacMsg= document.getElementById("sacMsg").value;
    let sacMotivo= document.getElementById("sacMotivo").value;
    let sacRuc= document.getElementById("sacRuc").value;
    let sacSerie= document.getElementById("sacSerie").value;
    let sacSerieNumber= document.getElementById("sacSerieNumber").value;
    let sacTypeService= document.getElementById("sacTypeService").value;

    let archivoContact_Ac= document.getElementById("archivoContact_Ac").value;
    //variables para comparar 
    let miTlf = sacTlf.length;
    let emailRegex = /\w+@\w+\.+[a-z]/;
    let sacRegex=/(.png|.jpg|.jpeg|.pdf|.doc|.docx)$/i;
    let fileSize = $('#archivoContact_Ac')[0].files[0].size;
    let siezekiloByte = parseInt(fileSize / 1024);

    let objetos={
      Name:`${sacName}`,   
      Tlf:`${sacTlf}`,      
      archivo:`${archivoContact_Ac}`,  
      Email:`${sacEmail}`,  
      Msg:`${sacMsg}`, 
      Motivo:`${sacMotivo}`,   
      Ruc:`${sacRuc}`, 
      Serie:`${sacSerie}`, 
      SerieNumber:`${sacSerieNumber}`,  
      TypeService:`${sacTypeService}`,
      tlfLength:`${miTlf}`,
      fileSize:`${fileSize}`,
      siezekiloByte:`${siezekiloByte}`

    };


    //validaciones| campos vacios
    if (
        sacName === "" ||
        sacTlf === "" ||
        sacEmail === "" ||
        sacMsg === "" ||
        sacMotivo === "" ||
        sacRuc === "" ||
        sacSerie === "" ||
        sacSerieNumber === "" ||
        sacTypeService === ""
    ) {
      swal({
        title: "¡Llene todos los datos!",
        icon: "warning",
        button: "Aceptar",
      });


    } else {

      if (!emailRegex.test(sacEmail)) {
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

        if(!sacRegex.test(archivoContact_Ac)){
          swal({
          title: "El formato del archivo no es valido debe subir PDF, docs o imgenes",
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
        sacName != "" && 
        sacTlf != "" &&    
        archivoContact_Ac != "" &&
        sacEmail != "" &&
        sacMsg != "" &&
        emailRegex.test(sacEmail) &&
        miTlf == 9 &&
        sacRegex.test(archivoContact_Ac) &&
        siezekiloByte < 1024 &&
        sacMotivo != ""  && 
        sacRuc != ""  &&
        sacSerie != ""  &&
        sacSerieNumber != ""  &&
        sacTypeService != ""

      ) {


        let url ='./fback/contact/contacto_sac.php'
        let formData = new FormData();
        let arshicvoSend = document.querySelector("#archivoContact_Ac").files[0];
          formData.append("archivo", arshicvoSend);
          formData.append("name", sacName); 
          formData.append("ruc", sacRuc); 
          formData.append("email", sacEmail); 
          formData.append("tlf", sacTlf ); 
          formData.append("mensaje", sacMsg ); 
          formData.append("motivo", sacMotivo ); 
          formData.append("serie", sacSerie ); 
          formData.append("SerieNumber", sacSerieNumber); 
          formData.append("servico", sacTypeService); 


     
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
               document.getElementById("sacName").value="";
               document.getElementById("sacTlf").value="";
               document.getElementById("sacEmail").value="";
               document.getElementById("sacMsg").value="";
               document.getElementById("sacMotivo").value="";
               document.getElementById("sacRuc").value="";
               document.getElementById("sacSerie").value="";
               document.getElementById("sacSerieNumber").value="";
               document.getElementById("sacTypeService").value="";
               document.getElementById("archivoContact_Ac").value="";
               document.getElementById("archivoContact_Ac").classList.remove("bloqueo");
               document.querySelector("#textfile").innerHTML = "* Adjuntar C.V"
               document.querySelector("#contenedorFile").classList.remove("bg-yellow");
               document.getElementById("contenedorFilet").classList.remove("bloqueo");
               document.querySelector("#textfile").classList.remove("text-black");
               document.getElementById("textfile").classList.add("textInput");
               document.getElementById("enviar_sac").classList.add("opacity-25");
               document.getElementById("enviar_sac").classList.add("bloqueo");

               console.log(data);

           }else{
               swal({
                 title: "Algo salio mal",
                 text: data,
                 icon: "error",
                 button: "Aceptar",
             });
             console.log(objetos);
             console.log(data);

           }   
                 
       });  
       

      }
    }
  });
});
