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
   $ruc=$data['ruc'];
   $msg=$data['msg'];
   $serie=$data['serie'];
   $serieNumber=$data['serieNumber'];
   $serviceType=$data['serviceType'];

   
/*================================================================================
                  3. COMPROBACION DE LAS VARIABLES
=================================================================================*/

   if( $name!=null
       and $email!=null
       and $tlf!=null
       and $serie!=null
       and $msg!=null
       and $ruc!=null
       and $serieNumber!=null
       and $serviceType!=null
       and $serieNumber!=""         
       and $serviceType!=""            
       and $ruc!="" 
       and $msg!="" 
       and $email!="" 
       and $tlf!=""  
       and $name!=""
       and $serie!="" ){
        
/*================================================================================
                  4. CREANDO EL MENSAJE
=================================================================================*/       
        include '../mailins/facturacion/htmlformat.php';

/*================================================================================
                  5. ENVIANDO CORREO ELECTRONICO
=================================================================================*/
       include '../mailins/facturacion/sendCC.php';
      
   }else{
      echo 'Llene todo los campos'; 
   } 
   
 }else{
     echo 'No se han enviado datos';
 }