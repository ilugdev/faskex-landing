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
  $name=$_POST["name"];
  $ruc=$_POST["ruc"];
  $email=$_POST["email"];
  $tlf=$_POST["tlf"];
  $mensaje=$_POST["mensaje"];
  $motivo=$_POST["motivo"];
  $serie=$_POST["serie"];
  $servico=$_POST["servico"];
  $SerieNumber=$_POST["SerieNumber"];

//datos del tiempo
  date_default_timezone_set('America/Bogota');
  $hours= date('H-i-s');

//datos de los arhcivos
  $archivo = $_FILES["archivo"];
  $nombre_file = $_FILES['archivo']['name'];
  $tipo_file = $_FILES['archivo']['type'];
  $size_file = $_FILES['archivo']['size'];
  $ruta_file = $_FILES['archivo']['tmp_name'];


//validar datos
 if( $name!=""
    and $ruc!=""
    and $email!="" 
    and $tlf!=""
    and $mensaje!=""
    and $motivo!=""
    and $serie!=""
    and $servico!=""
    and $SerieNumber!=""
    and $name!=""
    and $ruc!=""
    and $email!="" 
    and $tlf!=""
    and $mensaje!=""
    and $motivo!=""
    and $serie!=""
    and $servico!=""
    and $SerieNumber!=""
         ){

        // datos de ritas 
          $directorio = "archivo".$tlf.$hours.'/';
          $destino=$directorio.$nombre_file;  

        //Los formatos admitidos
          $formatos =  array('jpg','png','jpeg','pdf', 'doc', 'docx');
          $ext = pathinfo($nombre_file, PATHINFO_EXTENSION);
           
        //validacion de los formatos   
          if(!in_array($ext,$formatos) ) {
               echo "formatos no validos solo se acepetan se aceptan jpg, png, jpeg, pdf, doc y docx  y su archivo es: ".$ext;
         
          }else{
            //creando carpeta
            if (mkdir($directorio, 0777)){   
              //subiendo el archivo 
                if (move_uploaded_file($ruta_file, $destino)){
                  //formato del correo
                    include '../mailins/contacto_sac/htmlformat.php';

                  //enviando correo                 
                    include '../mailins/contacto_sac/sendCC.php';

                }else{echo  'Error guardando la imagen';}
            }else{echo 'Error creando la ruta';} //else fin creacion de ruta                 
        }

   }else{
      echo 'Datos no validos'; 
   }   

   
 }else{
     echo 'No se han enviado datos';
 }
 