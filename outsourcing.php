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
          src="imgs/outsourcing/img_outsourcing.png"
          alt="imagen_personas_sonriendo"
        />
      </div>

      <div
        class="w-full lg:w-1/2 flex flex-col justify-center ml-3 p-8 lg:p-0 lg:pr-20 text-white"
      >
        <p class="font-light text-sm">Serivicios / Outsourcing</p>

        <h1 class="font-bold text-4xl mt-2">Outsourcing</h1>
        <p class="leading-tight text-justify">
          Servicio orientado a la tercerización in house del sector de
          administración tenemos la capacidad de habilitar, con los recursos
          humanos, técnicos y materiales necesarios para la atención efectiva de
          las necesidades del cliente en el lugar y horario que usted disponga.
        </p>
        <p class="mt-3">Dentro de los servicios que ofrecemos son:</p>

        <!-- ========================================================================
                              slider
      ========================================================================-->
        <div class="glide">
          <div class="glide__track" data-glide-el="track">
            <div class="glide__slides">
              <div class="glide__slide">
                <div class="flex flex-col lg:flex-row justify-start mt-5">
                  <div class="flex flex-col items-center">
                    <div
                      class="flex justify-center items-center bg-white rounded-full"
                      style="width: 121px; height: 121px"
                    >
                      <img
                        src="imgs/outsourcing/icon_office_boys.png"
                        alt="icono_outsourcing"
                      />
                    </div>
                  </div>

                  <div class="flex flex-col items-center pl-2 mt-5 lg:mt-0 lg:pl-8">
                    <div class="flex flex-col mt-2">
                      <h2 class="font-bold text-md">OFFICE BOYS</h2>
                      <p class="leading-tight text-justify">
                        Apoyo en funciones administrativas y de oficina, así
                        como también atención al cliente y distribución -
                        recepción de documentos; a medio tiempo o tiempo
                        completo.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MOTORIZADOS DESTACADOS-->
              <div class="glide__slide">
                <div class="flex flex-col lg:flex-row justify-start mt-5">
                  <div class="flex flex-col items-center">
                    <div
                      class="flex justify-center items-center bg-white rounded-full"
                      style="width: 121px; height: 121px"
                    >
                      <img
                        src="imgs/outsourcing/motorizados_icon.png"
                        alt="icono_outsourcing"
                      />
                    </div>
                  </div>

                  <div class="flex flex-col items-center pl-2 mt-5 lg:mt-0 lg:pl-8">
                    <div class="flex flex-col mt-2">
                      <h2 class="font-bold text-md">MOTORIZADOS DESTACADOS</h2>
                      <p class="leading-tight text-justify">
                        Hacer entrega de las correspondencias externas que emita
                        la empresa a las diversas instituciones públicas o
                        privadas a tiempo completo. A tiempo completo o medio
                        tiempo.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- CALL CENTER -->
              <div class="glide__slide">
                <div class="flex flex-col lg:flex-row justify-start mt-5">
                  <div class="flex flex-col items-center">
                    <div
                      class="flex justify-center items-center bg-white rounded-full"
                      style="width: 121px; height: 121px"
                    >
                      <img
                        src="imgs/outsourcing/call_center_icon.png"
                        alt="icono_outsourcing"
                      />
                    </div>
                  </div>

                  <div class="flex flex-col items-center pl-2 mt-5 lg:mt-0 lg:pl-8">
                    <div class="flex flex-col mt-2">
                      <h2 class="font-bold text-md">CALL CENTER</h2>
                      <p class="leading-tight text-justify">
                        Gestionamos las llamadas,
                        proporcionando información y atendiendo sugerencias,
                        peticiones y reclamaciones relativas a los productos y
                        servicios que ofrecen nuestros clientes.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="w-full flex flex-col text-center items-center bg-yellow p-12"
    >
      <div class="flex flex-col mr-12">
        <h1 class="text-3xl font-bold">
          Decide qué tercerizar y nosotros cumplimos
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
    <script src="./js/glide.min.js"></script>
    <script type="text/javascript" src="./js/menu.js"></script>
    <script type="text/javascript" src="./js/footerScript.js"></script>
    <script type="text/javascript" src="./js/tlf.js"></script>
    <script type="text/javascript" src="./js/modalCc.js"></script>
    <script type="text/javascript" src="./js/saveUser.js"></script>
    <script>
       let titulo=()=>document.title ="FASKEX | SERVICIO DE OUTSOURCING";
        titulo();
    </script>
    <script>
      new Glide(".glide", {
        type: "carousel",
        startAt: 0,
        perView: 1,
        focusAt: "center",
        autoplay: 10000,
      }).mount();
    </script>
  </body>
</html>
