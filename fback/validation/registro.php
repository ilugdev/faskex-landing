<?php
/*==================================================================================
                 1. CONEXIONES A LA BASE DE DATOS 
=================================================================================*/

include '../connections/conn.php';

/*================================================================================
                 2. VALIDANDO LAS VARIABLES RECIBIDAS POR POST
=================================================================================*/

if(isset($_POST)){
/*==============================================================================
                 2. CONFIGURANDO LA CODIFICACION DE LOS DATOS
================================================================================*/

  header("Content-Type: application/json; charset=UTF-8");
/*================================================================================
                 3. VARIABLES RECIBIDAS POR POST
=================================================================================*/

   $data = json_decode($_POST['data'], true);
   $email=$data['email']; 
   $name=$data['name'];
   $msj=$data['msj'];
   $tlf=$data['tlf'];
   
/*================================================================================
                  4. COMPROBACION DE LAS VARIABLES
=================================================================================*/

   if( $name!=null
       and $email!=null
       and $tlf!=null
       and $msj!=null
       and $email!="" 
       and $tlf!=""  
       and $name!=""
       and $msj!="" ){
       
       //Consulta sql | validar user
       $ValidarDatos = "SELECT * FROM `dataUser` WHERE email='$email'";
       $resultado = mysqli_query($conn, $ValidarDatos);

         if (mysqli_num_rows($resultado) >= 1) {

                  echo 'Este usuario ya existe';
           }

         if (mysqli_num_rows($resultado) == 0) {

                $sql = "INSERT INTO `dataUser` (fullName, email, tlf, msj)
                      VALUES ('$name', '$email', '$tlf', '$msj')"; 
                $resultadoDos = mysqli_query($conn, $sql);

                if($resultadoDos===true){
                    
                    //Respuesta 
                    echo "Usuario registrado";

                }else{echo 'No se logro registrar el usuario';}  
      }       
   }else{
      echo 'Llene todo los campos'; 
   } 
   
 }else{
     echo 'No se han enviado datos';
 }


