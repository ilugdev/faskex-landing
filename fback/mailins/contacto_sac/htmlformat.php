<?php
$year=date("Y");
$bodyMail="
<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: '';
  clear: both;
  display: block;
}

[class*='col-'] {
  float: left;
  padding: 15px;
}

html {
  font-family: 'Lucida Sans', sans-serif;
}

.header {
  color: #ffffff;
  padding: 15px;
}


.footer {
  color: #ffffff;
  text-align: center;
  font-size: 16px;
  padding: 15px;
  justify-content: center;
  align-items: center;
}

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

#msText{
    width:100%;
    position:relative;
    margin-left:5%; 
    margin-top:0%;     
}


@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*='col-'] {
    width: 100%;
  }
  

#msText{
    width:100%;
    position:relative;
    margin-left:0px; 
    margin-top:0%;     
}
  
}
</style>
</head>
<body>

<div class='header'>
    <a id='logoUrl' href='https://www.faskex.com'>
      <img src='https://erishyum.com/project_fasking/imgs/home/logo.png' alt='faskex logo' id='logo' style'
         width:100%;
         max-width: 200px;
         padding-bottom: 20px;
         display: block;
         margin-left: auto;
         margin-right: auto;      
      '/>
    </a>    
    <img src='https://erishyum.com/project_fasking/imgs/banners_home/courier.png' alt='fondo-faskex' width='100%' >
</div>

<div class='row'>

  <div class='col-12'>
    <h1 id='titleContainer' style='text-align: center; padding-bottom: 18px;'>
       Atención al Cliente
    </h1>
    <ul id='msText' >
       <li style='font-size:16px;color:#686868;padding-bottom: 18px;'>
         <b>Servicio:</b>
           $servico
       </li>
       <li style='font-size:16px;color:#686868;padding-bottom: 18px;'>
         <b>Serie:</b>
           $serie
         <b>Numero:</b>
           $SerieNumber
       </li>
        <li style='font-size:16px;color:#686868;padding-bottom: 18px;'>
          <b>Email:</b>
          $email
        </li>
        <li style='font-size:16px;color:#686868;padding-bottom: 18px;'>
          <b>Número de telefono:</b> 
           $tlf
        </li>
        <li style='font-size:16px;color:#686868;padding-bottom: 18px;'>
          <b>Nombre:</b> 
           <span style='text-transform: capitalize'>$name</span>
        </li>
        <li style='font-size:16px;color:#686868;padding-bottom: 18px;'>
          <b>Motivo:</b> 
          <span style='text-transform: capitalize'> $motivo</span>
        </li>
        <li style='font-size:16px;color:#686868;padding-bottom: 18px;'>
          <b>Comentario:</b> 
          <span style='text-transform: capitalize'> $mensaje</span>
        </li>        
        <li style='font-size:16px;color:#686868;padding-bottom: 18px;'>
          <b>Archivo adjunto:</b>
          <a type='button' 
              href='https://www.erishyum.com/faskex/fback/contact/$destino'
              style='line-height: 180%;'
           >
              <b>
                  Descargar 
             </b>
          </a>
        </li>
    </ul> 
  </div>
</div>

<div class='footer'>
    <hr id='mainHr' style='
      width:100%; 
      position:relative; 
      left:0%; 
      border-color: #cfcfcf; 
      border-top: 0.1px solid #cfcfcf; 
      text-align: center;
      align-items: center;
      align-content: center;
    '/>
    <p style='color:#686868;'> &#169; Copyright $year - Faskex.com Todos los Derechos Reservados<p>
</div>

</body>
</html>
";


