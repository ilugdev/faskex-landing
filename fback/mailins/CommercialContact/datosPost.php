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
   $email=$data['email']; 
   $name=$data['name'];
   $company=$data['company'];
   $address=$data['address'];
   $tlf=$data['tlf'];
  
   
/*================================================================================
                  3. COMPROBACION DE LAS VARIABLES
=================================================================================*/

   if( $name!=null
       and $email!=null
       and $tlf!=null
       and $address!=null
       and $company!=null
       and $company!="" 
       and $email!="" 
       and $tlf!=""  
       and $name!=""
       and $address!="" ){
        
/*================================================================================
                  4. CREANDO EL MENSAJE
=================================================================================*/       
        include './htmlformat.php';

/*================================================================================
                  5. ENVIANDO CORREO ELECTRONICO
=================================================================================*/
       include './sendCC.php';
      
   }else{
      echo 'Llene todo los campos'; 
   } 
   
 }else{
     echo 'No se han enviado datos';
 }