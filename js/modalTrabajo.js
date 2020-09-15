/*====================================================================================
                                MODAL CONTACTO COMERCIAL
======================================================================================*/

       $(document).ready(function(){
         $("#modalTrabajo-open").click(function(){
             $("#modalTrabajo").css("display", "block");
         });
       });

       $(document).ready(function(){
             $("#modalTrabajo-close").click(function(){
             $("#modalTrabajo").css("display", "none");
         });
       });

       $(document).ready(function(){
             $("#modalTrabajo-cancelar").click(function(){
             $("#modalTrabajo").css("display", "none");
                document.getElementById("nombreCompleto").value="";
                document.getElementById("correo").value="";
                document.getElementById("celular").value="";
                document.getElementById("puesto").value=""
                document.getElementById("dni").value="";             
                document.getElementById("cv").value="";             
                document.getElementById("contendedor-input").style.backgroundColor = "rgba(255, 99, 71, 0)";
                document.getElementById("cv").classList.remove("bloqueo");
                document.getElementById("text-input").innerHTML = "* Adjuntar C.V (En PDF ó Word menos a 1 MB)";
                document.getElementById("contendedor-input").classList.remove("bloqueo");
                $("#text-input").css("color", "#92ABB1");


         });
       });

/*====================================================================================
                             VALIDAR FORMULARIO de trabajo
======================================================================================*/
       //validar cv
       $(document).ready(function(){
             $('#cv').change(function() {
              //VARIABLES DECLARADAS
                var expresiones=/\w+@\w+\.+[a-z]/;
                var cvRegex=/(.pdf|.doc|.docx)$/i;
                var cv= document.getElementById("cv");             
                var valorCv= document.getElementById("cv").value;
                var fileSize = $('#cv')[0].files[0].size;
                var siezekiloByte = parseInt(fileSize / 1024);


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

                      }
                    }
               });
           });

       // enviadno respuesta de enviar

       $(document).ready(function(){
        $("#enviar-modalTrabajo").click(function(){
              //VARIABLES DECLARADAS
          var celular= document.getElementById("celular").value;
          var dni= document.getElementById("dni").value;
          var nombreCompleto= document.getElementById("nombreCompleto").value;
          var correo= document.getElementById("correo").value;
          var puesto= document.getElementById("puesto").value;
          var cv= document.getElementById("cv").value;
          var telefono=celular.length;
          var expresiones=/\w+@\w+\.+[a-z]/;
          var cvRegex=/(.pdf|.doc|.docx)$/i;
          var fileSize = $('#cv')[0].files[0].size;
          var siezekiloByte = parseInt(fileSize / 1024);
          var countDni=dni.length;


       if(correo==="" || dni==="" || nombreCompleto==="" || puesto==="" || cv==="" || celular==="" ){
          swal({
             title: "¡Llene todos los datos!",
             icon: "warning",
             button: "Aceptar",
          });

        }else{
           if(!cvRegex.test(cv)){
            swal({
            title: "El formato del archivo no es valido",
            icon: "warning",
            button: "Aceptar",
           });
           }

           if(!expresiones.test(correo)){
            swal({
            title: "Formato de correo no valido",
            icon: "warning",
            button: "Aceptar",
           });

           if(telefono<=8){
            swal({
            title: "Formato de tlf no valido",
            icon: "warning",
            button: "Aceptar",
           });    
       }
           if(countDni<=7){
            swal({
            title: "EL formato del documento de identidad no valido",
            icon: "warning",
            button: "Aceptar",
           }); 
          }
     }

      if (correo!="" && dni!="" && countDni==8 && nombreCompleto!="" && puesto!="" && cv!="" && cvRegex.test(cv) && celular!="" && siezekiloByte < 1024 && telefono==9 && expresiones.test(correo)) {

          swal({
            title: "Funciona",
            icon: "success",
            button: "Aceptar",
           });  
        }
      }
     });
  });













