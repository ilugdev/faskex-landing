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
   $msg=$data['msg'];
   
/*================================================================================
                  3. COMPROBACION DE LAS VARIABLES
=================================================================================*/

   if( $name!=null
       and $email!=null
       and $tlf!=null
       and $msg!=null
       and $msg!="" 
       and $email!="" 
       and $tlf!=""  
       and $name!=""
        ){
        
/*================================================================================
                  4. CREANDO EL MENSAJE
=================================================================================*/       
        include '../mailins/soporteWeb/htmlformat.php';

/*================================================================================
                  5. ENVIANDO CORREO ELECTRONICO
=================================================================================*/
       include '../mailins/soporteWeb/sendCC.php';
      
   }else{
      echo 'Llene todo los campos'; 
   } 
   
 }else{
     echo 'No se han enviado datos';
 }