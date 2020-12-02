<!DOCTYPE html>
<html lang="es">
 <head>

<!--==============================================================================
                                META DATOS
=================================================================================-->
<?php include './requiere/headMetaData.php';?>
 </head>
  <body class="bg-white">
<!--==============================================================================
                                MODAL REGISTRO
=================================================================================-->
<?php include './requiere/registro.php';?>

<!--==============================================================================
                           MODAL TRABAJA CON NOSOTROS
=================================================================================-->
<?php include './requiere/workingtogether.php';?>

<!--==============================================================================
                            MODAL contacto de la pagina
=================================================================================-->
<?php include './requiere/contatoComercial.php';?>

<!--==============================================================================
                                MENU SIDE BAR  
=================================================================================-->
<?php include './requiere/menu.php';?>

<!--==============================================================================
                                HEADER DE LA PAGINA 
=================================================================================-->
<?php include './requiere/header.php';?>

<!--==============================================================================
                                CURPO DE LA PAGINA 
=================================================================================-->

    <div class="w-full height-519 flex bg-cyan">
      <div class="w-1/2 hidden lg:block">
        <img
          class="h-full pr-5"
          src="imgs/courier/img_courier.png"
          alt="imagen_personas_sonriendo"
        />
      </div>

      <div
        class="w-full lg:w-1/2 flex flex-col justify-center ml-3 px-8 lg:px-0 lg:pr-20 py-8 lg:py-0 text-white"
      >
        <p class="font-light text-sm">Serivicios / Courier</p>

        <h1 class="font-bold text-4xl mt-2">Courier</h1>
        <p class="leading-tight text-justify">
          Servicio de recojo, habilitado y distribución de paquetes y
          encomiendas. Tiene seguimiento y control mediante el sistema de
          rastreo Faskex en su trayecto.
        </p>
        <p class="mt-3 leading-tight text-justify">
          Con nosotros obtienes servicios que nadie más te ofrece, con garantía
          de seguridad y rapidez inigualable. Nuestras modalidades a nivel
          local:
        </p>

        <div class="flex justify-center lg:justify-start mt-10 space-x-3">
          <div class="w-40 flex flex-col items-center">
            <div
              class="flex justify-center items-center bg-white rounded-full hover:bg-blue-700"
              style="width: 121px; height: 121px"
              id="se"
            >
              <h3 class="se-text leading-tight text-center absolute">
                Entrega<br /><b>6 Hrs.</b>
              </h3>
              <img
                src="imgs/courier/icon_se.png"
                alt="icono_courier"
                class="se-img"
              />
            </div>
            <div class="flex flex-col mt-2 text-center">
              <h2 class="font-bold">SUPER EXPRESS</h2>
            </div>
          </div>

          <div class="w-40 flex flex-col items-center">
            <div
              class="flex justify-center items-center bg-white rounded-full hover:bg-blue-700"
              style="width: 121px; height: 121px"
              id="express"
            >
              <h3 class="express-text leading-tight text-center absolute">
                Entrega<br /><b>24 Hrs.</b>
              </h3>
              <img
                src="imgs/courier/icon_e.png"
                alt="icono_courier"
                class="express-img"
              />
            </div>
            <div class="flex flex-col mt-2 text-center">
              <h2 class="font-bold">EXPRESS</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="w-full height-405 flex flex-col lg:flex-row px-8 lg:px-32 py-12 bg-blue"
    >
      <div class="w-full lg:w-1/2 flex flex-col pt-24 text-white text-center">
        <h1 class="text-4xl font-bold">Envíos Nacionales</h1>
        <p class="leading-tight text-justify font-medium">
          Servicio de distribución de paquetes de 1 m. por cada lado (ancho,
          largo y alto) y hasta 50 kg. de peso. La distribución se realiza a
          través de nuestros motorizados. En este caso, para las zonas rurales
          se considerará un costo y tiempo adicional para su entrega, la cual
          será informado oportunamente.
        </p>
      </div>
      <div class="w-full lg:w-1/2 mt-8 lg:pl-16">
        <img
          src="imgs/courier/img_nacionales.png"
          alt="diferente_localidades"
        />
      </div>
    </div>
    

    <div
      class="w-full height-458 flex flex-col lg:flex-row justify-evenly px-8 lg:px-32 mb-4 py-12 lg:space-x-10"
    >
      <div class="w-full lg:w-1/2 flex flex-col lg:mt-3">
        <h1 class="font-bold text-4xl">Características Generales</h1>
        <ul class="mt-5 ml-5">
          <li class="relative pl-4 custom-discs-cyan">
            Se aplica peso volumen en caso los paquetes tengan mayor tamaño que
            peso.
          </li>
          <li class="relative pl-4 custom-discs-cyan">
            Las entregas se realizarán al día siguiente de realizado el recojo,
            a excepción del servicio EXPRESS.
          </li>
          <li class="relative pl-4 custom-discs-cyan">
            El servicio incluye: Embalaje simple, Etiqueta, Cargo y
            Digitalización de cargos.
          </li>
          <li class="relative pl-4 custom-discs-cyan">
            El cliente debe declarar de forma oral y escrita la mercadería y
            valor a transportar.
          </li>
          <li class="relative pl-4 custom-discs-cyan">
            El paquete puede ser recibido por cualquier persona que se encuentre
            en la dirección de entrega presentando su DNI vigente.
          </li>
        </ul>
      </div>
      <div class="w-px hidden lg:block bg-black mx-3"></div>
      <div class="w-full lg:w-1/2 flex flex-col mt-6 lg:mt-3">
        <h1 class="font-bold text-4xl">Restricciones del Servicio</h1>
        <ul class="mt-5 ml-5">
          <li class="relative pl-4 custom-discs-cyan">
            No se admiten joyas, armas de fuego, artículos de cómputo, vales de
            consumo y mascotas.
          </li>
          <li class="relative pl-4 custom-discs-cyan">
            Los traslados de los productos son en condiciones y temperaturas
            normales.
          </li>
          <li class="relative flex flex-col pl-4 custom-discs-cyan">
            Para mayor información leer nuestro apartado de 
            <a class="text-cyan" href="#" target="_blank" rel="noopener">
              Términos y Condiciones
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div
      class="w-full flex flex-col lg:flex-row justify-center items-center bg-yellow p-12"
    >
      <div class="flex flex-col mr-12">
        <h1 class="text-3xl font-bold">
          Tú decides a dónde enviar y nosotros cumplimos
        </h1>
        <p class="text-lg font-medium">
          Nuestro servicio es 100% en linea, amigable y el más económico del
          mercado.
        </p>
      </div>

      <a href="cotizar.php">
        <button class="px-12 py-2 mt-12 lg:mt-0 bg-blue text-white">
          SOLICITAR COTIZACIÓN
        </button>
      </a>
    </div>


<!--==============================================================================
                                 FOOTER
=================================================================================-->
<?php include './requiere/footer.php';?>

<!--==============================================================================
                                  SCRIPTS 
=================================================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="./js/menu.js"></script>
    <script type="text/javascript" src="./js/footerScript.js"></script>
    <script type="text/javascript" src="./js/tlf.js"></script>
    <script type="text/javascript" src="./js/modalCc.js"></script>
    <script type="text/javascript" src="./js/saveUser.js"></script>
    <script>
       let titulo=()=>document.title ="FASKEX | SERVICIO DE COURIER";
        titulo();
    </script>
  </body>
</html>
