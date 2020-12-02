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
      <div class="w-full lg:w-1/2 hidden lg:block">
        <img
          class="pr-5"
          src="imgs/mensajeria/img_mensajeria.png"
          alt="imagen_personas_sonriendo"
        />
      </div>

      <div class="w-full lg:w-1/2 py-12 ml-3 px-5 lg:px-0 lg:pr-20 text-white">
        <p class="font-light text-sm">Servicios / Mensajería</p>

        <h1 class="font-bold text-4xl mt-2">Mensajería</h1>
        <p class="leading-tight text-justify">
          Servicio de recojo, habilitado y distribución de documentos: estados
          de cuenta, facturas, sobres, cartas, partes de matrimonio,
          invitaciones, publicidad, revistas, encartes, boletines,
          notificaciones, catálogos, libros y más.
        </p>
        <p class="leading-tight text-justify">
          Con nosotros obtienes servicios que nadie más te ofrece, con garantía
          de seguridad y rapidez inigualable. Nuestras modalidades a nivel
          local:
        </p>

        <div
          class="flex items-center flex-wrap justify-between mt-10 lg:space-y-0"
        >
          <div class="w-32 flex flex-col items-center">
            <div
              class="group flex justify-center items-center bg-white hover:bg-blue-700 rounded-full"
              style="width: 121px; height: 121px"
              id="urgente"
            >
              <h3 class="urgente-text leading-tight text-center absolute">
                Entrega<br /><b>24 Hrs.</b>
              </h3>
              <img
                src="imgs/mensajeria/icon_u.png"
                alt="icono_mensajeria"
                class="urgente-img"
              />
            </div>
            <div class="flex flex-col mt-2 text-center">
              <h2 class="font-bold">URGENTE</h2>
            </div>
          </div>
          <div class="w-32 flex flex-col items-center">
            <div
              class="flex justify-center items-center bg-white rounded-full hover:bg-blue-700"
              style="width: 121px; height: 121px"
              id="interdiario"
            >
              <h3 class="interdiario-text leading-tight text-center absolute">
                Entrega<br /><b>48 Hrs.</b>
              </h3>
              <img
                src="imgs/mensajeria/icon_i.png"
                alt="icono_mensajeria"
                class="interdiario-img"
              />
            </div>
            <div class="flex flex-col mt-2 text-center">
              <h2 class="font-bold">INTERDIARIO</h2>
            </div>
          </div>
          <div class="w-32 flex flex-col items-center mt-8">
            <div
              class="flex justify-center items-center bg-white rounded-full hover:bg-blue-700"
              style="width: 121px; height: 121px"
              id="regular"
            >
              <h3 class="regular-text leading-tight text-center absolute">
                Entrega<br /><b>3 días<br />hábiles</b>
              </h3>
              <img
                src="imgs/mensajeria/icon_r.png"
                alt="icono_mensajeria"
                class="regular-img"
              />
            </div>
            <div class="flex flex-col mt-2 text-center">
              <h2 class="font-bold">REGULAR</h2>
            </div>
          </div>
          <div class="w-32 flex flex-col items-center mt-8">
            <div
              class="flex justify-center items-center bg-white rounded-full hover:bg-blue-700"
              style="width: 121px; height: 121px"
              id="basico"
            >
              <h3 class="basico-text leading-tight text-center absolute">
                Entrega<br /><b>4 días<br />hábiles</b>
              </h3>
              <img
                src="imgs/mensajeria/icon_b.png"
                alt="icono_mensajeria"
                class="basico-img"
              />
            </div>
            <div class="flex flex-col mt-2 text-center">
              <h2 class="font-bold">BÁSICO</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="w-full height-405 flex flex-col lg:flex-row px-8 lg:px-32 py-12 bg-blue"
    >
      <div class="w-full lg:w-1/2">
        <img
          src="imgs/courier/img_nacionales.png"
          alt="diferente_localidades"
        />
      </div>
      <div
        class="w-full lg:w-1/2 flex flex-col text-white text-center mt-8 lg:pl-16"
      >
        <h1 class="text-4xl font-bold">Envíos Nacionales</h1>
        <p class="leading-tight text-justify font-medium">
          Servicio de distribución de documentos hasta 1000 g. La distribución
          se realiza a través de nuestros mensajeros a nivel nacional en un
          plazo de 4 a 7 días hábiles. En este caso, para las zonas rurales se
          considerará un costo y tiempo adicional para su entrega, la cual será
          informado oportunamente.
        </p>
      </div>
    </div>

    <div
      class="w-full height-458 flex flex-col lg:flex-row justify-evenly px-8 lg:px-32 mb-4 py-12 lg:space-x-10"
    >
      <div class="w-full lg:w-1/2 flex flex-col lg:mt-3">
        <h1 class="font-bold text-4xl">Características Generales</h1>
        <ul class="mt-5 ml-5 font-medium">
          <li class="relative pl-4 custom-discs-cyan">
            Los documentos de un peso mayor a 1000 g. serán considerados como
            paquetes.
          </li>
          <li class="relative pl-4 custom-discs-cyan">
            Las entregas se realizarán al día siguiente de realizado el recojo,
            a excepción de los servicios EXPRESS.
          </li>
          <li class="relative pl-4 custom-discs-cyan">
            El servicio incluye: Bolsa, etiqueta, cargo y digitalización de
            cargos.
          </li>
          <li class="relative pl-4 custom-discs-cyan">
            El documento puede ser recibido por cualquier persona que se
            encuentre en la dirección de entrega presentando su DNI vigente.
          </li>
          <li class="relative pl-4 custom-discs-cyan">
            fasdfsadfasfsadfsafsadfsafsa.
          </li>
          <li class="relative pl-4 custom-discs-cyan">
            Permite Seguimiento vía WEB.
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
    <script src="./js/glide.min.js"></script>
    <script type="text/javascript" src="./js/menu.js"></script>
    <script type="text/javascript" src="./js/footerScript.js"></script>
    <script type="text/javascript" src="./js/tlf.js"></script>
    <script type="text/javascript" src="./js/modalCc.js"></script>
    <script type="text/javascript" src="./js/saveUser.js"></script>
    <script>
       let titulo=()=>document.title ="FASKEX | SERVICIO DE MENSAJERIA";
        titulo();
    </script>
  </body>
</html>
