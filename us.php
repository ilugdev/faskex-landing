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
      <div class="w-1/2 hidden lg:flex">
        <img
          class="h-full pr-5"
          src="imgs/faskex/faskex_main.png"
          alt="imagen_personas_sonriendo"
        />
      </div>

      <div
        class="w-full lg:w-1/2 flex flex-col justify-center px-6 lg:px-0 py-10 lg:py-0 lg:pr-20 text-white"
      >
        <p class="font-light text-sm">Faskex / Nuestra empresa</p>

        <h1 class="font-bold text-4xl mt-2">Nuestra Empresa</h1>
        <p class="leading-tight text-justify">
          En Faskex Express tenemos el objetivo de engrandecer y hacer crecer tu
          negocio. Poniendo a tu disposición una gama de servicios ideales para
          cubrir eficiente y eficazmente su operación logística, con las mejores
          opciones de valor agregado: seguridad, tecnología, confiabilidad,
          entre otras más.
        </p>

        <p class="mt-5 leading-tight text-justify">
          Somos tu mejor aliado estratégico, ofreciéndote una plataforma
          moderna, un canal rápido y oportuno al cumplimiento de un excelente
          servicio.
        </p>

        <!-- ========================================================================
                              slider
      ========================================================================-->
        <div class="glide">
          <div class="glide__track" data-glide-el="track">
            <div class="glide__slides">
              <div class="glide__slide">
                <div
                  id="contenedorVision"
                  class="flex flex-col-reverse lg:flex-row justify-start mt-2 lg:mt-6"
                >
                  <div
                    class="w-32 flex justify-center items-center m-auto mt-0"
                  >
                    <div
                      class="flex justify-center items-center bg-white rounded-full"
                      style="width: 121px; height: 121px"
                    >
                      <img
                        src="imgs/faskex/icon_mision.png"
                        alt="icon_mision"
                      />
                    </div>
                  </div>

                  <div class="flex flex-col items-center lg:pl-8">
                    <div class="flex flex-col">
                      <h2 class="font-bold text-md">MISIÓN</h2>
                      <p class="leading-tight text-justify">
                        Brindar un servicio a tiempo, especializado, moderno y
                        profesional para la satisfacción plena y eficaz de las
                        necesidades y requerimientos logísticos de nuestros
                        clientes.
                      </p>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="glide__slide">
                <div
                  id="contenedorMision"
                  class="flex flex-col-reverse lg:flex-row justify-start mt-2 lg:mt-6"
                >

                  <div
                    class="w-32 flex justify-center items-center m-auto mt-0"
                  >
                    <div
                      class="flex justify-center items-center bg-white rounded-full"
                      style="width: 121px; height: 121px"
                    >
                      <img
                        src="imgs/faskex/icon_vision.png"
                        alt="icon_vision"
                      />
                    </div>
                  </div>

                  <div class="flex flex-col items-center lg:pl-8">
                    <div class="flex flex-col">
                      <h2 class="font-bold text-md">VISIÓN</h2>
                      <p class="leading-tight text-justify">
                        Ser una empresa ágil, moderna, confiable,
                        profesional, humana y responsable socialmente; donde
                        conectamos y reducimos las distancias y el tiempo para
                        cumplir eficientemente los propósitos logísticos de
                        nuestros clientes.
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

    <div class="w-full flex flex-col px-6 lg:px-32 py-12">
      <div class="text-center">
        <h1 class="text-4xl font-bold leading-tight">
          <b>Nuestros Valores</b>
        </h1>
        <h1
          id="valoresTitulos"
          class="text-base text-blue font-bold leading-0 mt-8 mb-4"
        >
          SERVICIO AL CLIENTE
        </h1>
        <p id="valoresTexto" class="w-4/5 lg:w-3/4 m-auto leading-0 text-lg">
           Nuestro espíritu positivo pone a nuestros clientes en el centro de lo que hacemos, 
           entregar un servicio de calidad es nuestra prioridad y es parte de nuestro ADN.
        </p>
      </div>

      <div class="flex space-x-3 items-center justify-center mt-10">
        <div class="w-16 lg:w-32 flex flex-col items-center">
          <div
            class="w-16 h-16 lg:w-24 lg:h-24 flex justify-center items-center bg-blue rounded-full"
            id="atencion"
          >
            <img src="imgs/faskex/icon_atencion.png" alt="icon_atencion" />
          </div>
        </div>
        <div class="w-16 lg:w-32 flex flex-col items-center">
          <div
            class="w-16 h-16 lg:w-24 lg:h-24 flex justify-center items-center bg-blue opacity-25 rounded-full"
            id="innovacion"
          >
            <img
              src="imgs/faskex/icon_innovacion.png"
              class=" "
              alt="icon_innovacion"
            />
          </div>
        </div>
        <div class="w-16 lg:w-32 flex flex-col items-center">
          <div
            class="w-16 h-16 lg:w-24 lg:h-24 flex justify-center items-center bg-blue opacity-25 rounded-full"
            id="lealtad"
          >
            <img src="imgs/faskex/icon_lealtad.png" alt="icon_lealtad" />
          </div>
        </div>
        <div class="w-16 lg:w-32 flex flex-col items-center">
          <div
            class="w-16 h-16 lg:w-24 lg:h-24 flex justify-center items-center bg-blue opacity-25 rounded-full"
            id="ambiente"
          >
            <img
              src="imgs/faskex/icon_medio_ambiente.png"
              alt="icon_medio_ambiente"
            />
          </div>
        </div>
      </div>
    </div>

    <div
      class="w-full flex flex-col lg:flex-row justify-center items-center bg-yellow p-12"
    >
      <div class="flex flex-col mr-12">
        <h1 class="text-3xl font-bold">
          Trabaja con nosotros ¡únete a Faskex Express!
        </h1>
        <p class="text-lg font-medium">
          Si eres de las personas que busca grances desafíos, esta es tu
          oportunidad.
        </p>
      </div>
      <button
        class="px-12 py-2 mt-12 lg:mt-0 bg-blue text-white"
        id="open_jobs"
      >
        ¡POSTULA AQUÍ!
      </button>
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
    <script type="text/javascript" src="./js/eventSelection.js"></script>
    <script type="text/javascript" src="./js/footerScript.js"></script>
    <script type="text/javascript" src="./js/tlf.js"></script>
    <script type="text/javascript" src="./js/saveUser.js"></script>
    <script type="text/javascript" src="./js/modalCc.js"></script>
    <script type="text/javascript" src="./js/modalWorking.js"></script>
<script>
//variables
let htmlLista="<i class='material-icons' id='arrow_list'>arrow_forward</i><a href='us.html' class='w-full text-left' style='cursor: pointer'><span class='ml-8'>FASKEX</span><hr/></a>";
//declarando las funsiones
  let titulo=()=>document.title ="FASKEX | NOSOTROS";
  let lista=()=>{document.getElementById("faskex").innerHTML = htmlLista;}
//llamando las funsiones    
  titulo();
  lista();    
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
