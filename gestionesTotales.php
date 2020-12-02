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
          src="imgs/gestiones/img_gestiones.png"
          alt="imagen_personas_sonriendo"
        />
      </div>

      <div
        class="w-full lg:w-1/2 flex flex-col justify-center px-6 lg:px-0 py-10 lg:py-0 ml-3 lg:pr-20 text-white"
      >
        <p class="font-light text-sm">Serivicios / Gestiones totales</p>

        <h1 class="font-bold text-4xl mt-2">Gestiones Totales</h1>
        <p class="leading-tight text-justify">
          Las empresas en el día a día requieren una importante cantidad de
          gestiones necesarias para desarrollarse. Nosotros contamos con
          profesionales que pueden adecuadamente realizar esas importantes
          gestiones de trámites, en vez de ocupar importantes horas de sus
          Ejecutivos, resolviendo en terreno diligencias que nosotros podemos
          hacer.
        </p>

        <p class="mt-4 leading-tight text-justify">
          Trámites disponibles para personas y empresas:
        </p>
        <ul class="mt-3 ml- leading-tight text-justify">
          <li class="relative pl-4 custom-discs-yellow">
            PARTIDAS nacimiento, bautizo, matrimonio, defunción,
            etc.
          </li>
          <li class="relative pl-4 custom-discs-yellow">
            PRESENTACIÓN de documentos en consulados.
          </li>
          <li class="relative pl-4 custom-discs-yellow">
            RECOJO y envío de diplomas y otros documentos.
          </li>
          <li class="relative pl-4 custom-discs-yellow">
            GESTIÓN de cartas notariales.
          </li>
          <li class="relative pl-4 custom-discs-yellow">
            CARTAS fianzas, cartas poder.
          </li>
          <li class="relative pl-4 custom-discs-yellow">
            RECOJOS y depósito de cheques.
          </li>
          <li class="relative pl-4 custom-discs-yellow">Otros...</li>
        </ul>
      </div>
    </div>

    <div class="w-full flex flex-col lg:px-32 py-12">
      <div class="text-center">
        <h1 class="lg:w-3/4 m-auto text-3xl font-bold leading-tight">
          Externalize con nosotros la
          gestión de sus trámites y obtenga estos beneficios...
        </h1>
      </div>

      <div
        class="flex flex-col lg:flex-row items-center justify-evenly mt-10 space-y-3 lg:space-x-0"
      >
        <div class="w-40 flex flex-col items-center">
          <div
            class="w-24 h-24 flex justify-center items-center bg-blue rounded-full"
          >
            <img
              class="w-10"
              src="imgs/gestiones/icon_ahorro_tiempo.png"
              alt="icono_gestiones"
            />
          </div>
          <div class="flex flex-col mt-2 text-center">
            <h2 class="text-base">Ahorro de tiempo</h2>
            <h2 class="text-base">de sus Ejecutivos</h2>
          </div>
        </div>
        <div class="w-40 flex flex-col items-center">
          <div
            class="w-24 h-24 flex justify-center items-center bg-blue rounded-full"
          >
            <img
              class="w-10"
              src="imgs/gestiones/icon_productividad.png"
              alt="icono_gestiones"
            />
          </div>
          <div class="flex flex-col mt-2 text-center">
            <h2 class="text-base">Mejoras de</h2>
            <h2 class="text-base">Productividad</h2>
          </div>
        </div>
        <div class="w-40 flex flex-col items-center">
          <div
            class="w-24 h-24 flex justify-center items-center bg-blue rounded-full"
          >
            <img
              class="w-10"
              src="imgs/gestiones/icon_seguimiento_control.png"
              alt="icono_gestiones"
            />
          </div>
          <div class="flex flex-col mt-2 text-center">
            <h2 class="text-base">Seguimiento de</h2>
            <h2 class="text-base">Gestión de Trámite</h2>
          </div>
        </div>
        <div class="w-40 flex flex-col items-center">
          <div
            class="w-24 h-24 flex justify-center items-center bg-blue rounded-full"
          >
            <img
              class="w-10"
              src="imgs/gestiones/icon_rendimiento.png"
              alt="icono_gestiones"
            />
          </div>
          <div class="flex flex-col mt-2 text-center">
            <h2 class="text-base">Mejor</h2>
            <h2 class="text-base">Rendimiento</h2>
          </div>
        </div>
      </div>
    </div>

    <div
      class="w-full flex flex-col text-center items-center bg-yellow p-12"
    >
      <div class="flex flex-col mr-12">
        <h1 class="text-3xl font-bold">
          Tú decides que trámite realizar y nosotros cumplimos
        </h1>
        <p class="text-lg font-medium">
          Nuestro servicio es 100% en linea, amigable y el más económico del
          mercado.
        </p>
      </div>
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
       let titulo=()=>document.title ="FASKEX | GESTIONES TOTALES";
        titulo();
    </script>
  </body>
</html>
