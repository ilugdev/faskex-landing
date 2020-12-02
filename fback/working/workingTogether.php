<?php
/*==================================================================================
                 1. CONEXIONES A LA BASE DE DATOS 
=================================================================================*/

//include '../connections/conn.php';

/*================================================================================
                 2. VERIFICANDO LAS VARIABLES RECIBIDAS POR POST
=================================================================================*/

if(isset($_POST)){

/*================================================================================
                 3. VARIABLES RECIBIDAS POR POST
=================================================================================*/
//datos recibidos por post
  $userName=$_POST["name"];
  $jobs=$_POST["jobs"];
  $email=$_POST["email"];
  $tlf=$_POST["tlf"];

//datos del tiempo
  date_default_timezone_set('America/Bogota');
  $hours= date('H-i-s');

//datos de los arhcivos
  $archivo = $_FILES["cv"];
  $nombre_cv = $_FILES['cv']['name'];
  $tipo_cv = $_FILES['cv']['type'];
  $size_cv = $_FILES['cv']['size'];
  $ruta_cv = $_FILES['cv']['tmp_name'];


//validar datos
 if( $userName!=null
    and $email!=null
    and $tlf!=null 
    and $jobs!=null      
    and $email!=""
    and $userName!="" 
    and $tlf!=""
    and $jobs!=""
         ){

        // datos de ritas 
          $directorio = "cv_".$tlf.$hours.'/';
          $destino=$directorio.$nombre_cv;  

        //Los formatos admitidos
          $formatos =  array('pdf', 'doc', 'docx');
          $ext = pathinfo($nombre_cv, PATHINFO_EXTENSION);
           
        //validacion de los formatos   
          if(!in_array($ext,$formatos) ) {
               echo "formatos no validos ".$ext;
         
          }else{
            //creando carpeta
            if (mkdir($directorio, 0777)){   
              //subiendo el archivo 
                if (move_uploaded_file($ruta_cv, $destino)){
                  //formato del correo
                    include '../mailins/workingTogether/htmlformat.php';

                  //enviando correo                 
                    include '../mailins/workingTogether/sendCC.php';

                }else{echo  'Error guardando la imagen';}
            }else{echo 'Error creando la ruta';} //else fin creacion de ruta                 
        }

   }else{
      echo 'Datos no validos'; 
   }   

   
 }else{
     echo 'No se han enviado datos';
 }
 


?>