/*================================================================================================
                                      VARIABLES CON TEXTOS
==================================================================================================*/

var atencion = { 
        titulo: "SERVICIO AL CLIENTE",
        texto: "Nuestro espíritu positivo pone a nuestros clientes en el centro de lo que hacemos, entregar un servicio de calidad es nuestra prioridad y es parte de nuestro ADN."
     };


var innovacion = { 
        titulo: "DESARROLLAMOS INNOVACIÓN ",
        texto: "Inventamos e inspiramos los servicios y tecnología que mejoran la forma en que trabajamos y vivimos."
    };

var lealtad = { 
        titulo: "ACTUAMOS CON LEALTAD",
        texto: "Nos ganamos y valoramos el respeto y la confianza de nuestros empleados, clientes, proveedores cada día, en todas las actividades que realizamos."
   };

var ambiente = { 
      titulo: "CALIDAD Y MEDIOAMBIENTE",
      texto: "Es nuestra responsabilidad mantener operaciones que generen un impacto positivo en el medio ambiente y la sociedad."
   };

/*================================================================================================
                              CAMBIANDO EL TEXTO AL HACER HOVER
==================================================================================================*/

//CAMBIANDO EL TEXTO AL HACER HOVER | atencion
$(document).ready(function(){
  $("#atencion").mouseenter(function(){
       //declaracion de variables
          let titulo= document.getElementById("valoresTitulos");
          let texto = document.getElementById("valoresTexto");
          let innovacion_element=document.getElementById("innovacion");        
          let lealtad_element=document.getElementById("lealtad");        
          let ambiente_element=document.getElementById("ambiente");       
          let atencion_element=document.getElementById("atencion"); 
          let patt = new RegExp("opacity-25");      
        
        //listar todas mis clases
          let lealtadClase= lealtad_element.classList;
          let ambienteClase= ambiente_element.classList;
          let atencionClase= atencion_element.classList;
          let innovaciondClase= innovacion_element.classList;

       //añadiendo clase       
          if(!patt.test(lealtadClase)){$("#lealtad").addClass("opacity-25");}
          if(!patt.test(ambienteClase)){$("#ambiente").addClass("opacity-25");}
          if(!patt.test(innovaciondClase)){$("#innovacion").addClass("opacity-25");}

        //remover la clase de opacidad
          if(patt.test(atencionClase)){$(this).removeClass("opacity-25");}
        
          
       //añadir contenedido de los textos       
          titulo.innerHTML = atencion.titulo;
          texto.innerHTML = atencion.texto;
  });
});

//CAMBIANDO EL TEXTO AL HACER HOVER | innovacion
$(document).ready(function(){
    $("#innovacion").mouseenter(function(){
       //declaracion de variables
          let titulo= document.getElementById("valoresTitulos");
          let texto = document.getElementById("valoresTexto");
          let innovacion_element=document.getElementById("innovacion");        
          let lealtad_element=document.getElementById("lealtad");        
          let ambiente_element=document.getElementById("ambiente");       
          let atencion_element=document.getElementById("atencion"); 
          let patt = new RegExp("opacity-25");      
        
        //listar todas mis clases
          let lealtadClase= lealtad_element.classList;
          let ambienteClase= ambiente_element.classList;
          let atencionClase= atencion_element.classList;
          let innovaciondClase= innovacion_element.classList;

        //remover la clase de opacidad
          if(patt.test(innovaciondClase)){$("#innovacion").removeClass("opacity-25");}
        
       //añadiendo clase       
          if(!patt.test(lealtadClase)){$("#lealtad").addClass("opacity-25");}
          if(!patt.test(ambienteClase)){$("#ambiente").addClass("opacity-25");}
          if(!patt.test(atencionClase)){$("#atencion").addClass("opacity-25");}
              
       //añadir contenedido de los textos       
          titulo.innerHTML = innovacion.titulo;
          texto.innerHTML = innovacion.texto;        
    });
  });
  
//CAMBIANDO EL TEXTO AL HACER HOVER | lealtad
  $(document).ready(function(){
    $("#lealtad").mouseenter(function(){
       //declaracion de variables
          let titulo= document.getElementById("valoresTitulos");
          let texto = document.getElementById("valoresTexto");
          let innovacion_element=document.getElementById("innovacion");        
          let lealtad_element=document.getElementById("lealtad");        
          let ambiente_element=document.getElementById("ambiente");       
          let atencion_element=document.getElementById("atencion"); 
          let patt = new RegExp("opacity-25");

        //listar todas mis clases
          let lealtadClase= lealtad_element.classList;
          let ambienteClase= ambiente_element.classList;
          let atencionClase= atencion_element.classList;
          let innovaciondClase= innovacion_element.classList;

        //remover la clase de opacidad
          if(patt.test(lealtadClase)){$("#lealtad").removeClass("opacity-25");}
        
       //añadiendo clase       
          if(!patt.test(innovaciondClase)){$("#innovacion").addClass("opacity-25");}
          if(!patt.test(ambienteClase)){$("#ambiente").addClass("opacity-25");}
          if(!patt.test(atencionClase)){$("#atencion").addClass("opacity-25");}
        
       //añadir contenedido de los textos           
          titulo.innerHTML = lealtad.titulo;
          texto.innerHTML = lealtad.texto; 
  
    });
  });
  
//CAMBIANDO EL TEXTO AL HACER HOVER | ambiente
  $(document).ready(function(){
    $("#ambiente").mouseenter(function(){
       //declaracion de variables
          let titulo= document.getElementById("valoresTitulos");
          let texto = document.getElementById("valoresTexto");
          let innovacion_element=document.getElementById("innovacion");        
          let lealtad_element=document.getElementById("lealtad");        
          let ambiente_element=document.getElementById("ambiente");       
          let atencion_element=document.getElementById("atencion"); 
          let patt = new RegExp("opacity-25");

        //listar todas mis clases
          let lealtadClase= lealtad_element.classList;
          let ambienteClase= ambiente_element.classList;
          let atencionClase= atencion_element.classList;
          let innovaciondClase= innovacion_element.classList;

        //remover la clase de opacidad
          if(patt.test(ambienteClase)){$("#ambiente").removeClass("opacity-25");}
        
       //añadiendo clase       
          if(!patt.test(lealtadClase)){$("#lealtad").addClass("opacity-25");}
          if(!patt.test(atencionClase)){$("#atencion").addClass("opacity-25");}
          if(!patt.test(innovaciondClase)){$("#innovacion").addClass("opacity-25");}
        
       //añadir contenedido de los textos    
         titulo.innerHTML = ambiente.titulo;
         texto.innerHTML = ambiente.texto;
    });
  });
  









