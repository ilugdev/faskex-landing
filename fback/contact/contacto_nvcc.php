<?php
if(isset($_POST)){
/*==============================================================================
                 1. CONFIGURANDO LA CODIFICACION DE LOS DATOS
================================================================================*/

  header("Content-Type: application/json; charset=UTF-8");
/*================================================================================
                 2. VARIABLES RECIBIDAS POR POST
=================================================================================*/

   $data = json_decode($_POST['data'], true);
   $name=$data['name'];
   $tlf=$data['tlf'];
   $email=$data['email']; 
   $rubro=$data['rubro'];
   $address=$data['direccion'];
   $ruc=$data['ruc'];
   $consulta=$data['consulta'];


/*================================================================================
                  3. COMPROBACION DE LAS VARIABLES
=================================================================================*/

   if( $name!=null
       and $email!=null
       and $tlf!=null
       and $address!=null
       and $rubro!=null
       and $ruc!=null
       and $consulta!=null
       and $consulta!=""      
       and $ruc!="" 
       and $rubro!="" 
       and $email!="" 
       and $tlf!=""  
       and $name!=""
       and $address!="" ){
        
/*================================================================================
                  4. CREANDO EL MENSAJE
=================================================================================*/       
        include '../mailins/consultaComercial/htmlformat.php';

/*================================================================================
                  5. ENVIANDO CORREO ELECTRONICO
=================================================================================*/
       include '../mailins/consultaComercial/sendCC.php';
      
   }else{
      echo 'Llene todo los campos'; 
   } 
   
 }else{
     echo 'No se han enviado datos';
 }