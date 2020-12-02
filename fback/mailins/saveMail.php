<?php

include '../connections/conn.php';

//variable con el array
$arr_mensaje="";

//validacion del envio por post
if(isset($_POST)){
    
    //varible recibida por email
    $mail = $_POST['email']; 
    
    //validacion de datos
    if($mail!="" or $mail!=null){
        
       //guardando los datos 
       $sql = "INSERT INTO `emails` (email) VALUES ('$mail')"; 
       $result = mysqli_query($conn, $sql);

       //mensaje de exito
       if($result===true){
           
         $datos_mensaje="subscrito";

    
        }else{
      
         $datos_mensaje="error";
           
        }
    }else{

        $datos_mensaje="error";
    }

   //enviando respuesta
    echo $datos_mensaje ;

}



?>