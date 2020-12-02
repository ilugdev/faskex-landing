<!DOCTYPE html>
<html lang="es">
<head>
  <!-- <link rel="canonical" href="https://faskex.com/" />
       <link rel="alternate" hreflang="es-pe" href="https://eltipodecambio.pe/" />
       <base href="https://eltipodecambio.pe/" />
  -->
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
                                MAIN SLIDER
=================================================================================-->

    <div class="glide" style="height: 519px">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div
              class="w-full h-full flex justify-center items-center relative"
            >
              <img
                class="w-full h-full absolute top-0 left-0"
                src="imgs/banners_home/mensajeria.png"
                alt="imagen_slider"
              />
              <div
                class="flex flex-col space-y-3 lg:space-y-0 absolute main-carousel-data text-left"
              >
                <div class="mb-3">
                  <h1 class="font-bold text-5xl leading-none">
                    <b>Llegamos rápido</b>
                  </h1>
                  <h1 class="font-bold text-5xl leading-none">
                    <b>a todo el Perú</b>
                  </h1>
                </div>
                <p class="font-medium text-2xl">
                  Envíos rápidos, transparentes y más
                </p>
                <p class="font-medium text-2xl">
                  económicos que la competencia.
                </p>
                <br>
                <button class="w-2/4 bg-blue px-4 py-3 mt-5 text-white font-medium">
                  DESCRUBE MÁS AQUÍ
                </button>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div
              class="w-full h-full flex justify-center items-center relative"
            >
              <img
                class="w-full h-full absolute top-0 left-0"
                src="imgs/banners_home/courier.png"
                alt="imagen_slider"
              />
              <div
                class="flex flex-col space-y-3 lg:space-y-0 absolute main-carousel-data text-left"
              >
                <div class="mb-3">
                  <h1 class="font-bold text-5xl leading-none">
                    <b>Tú pides, nosotros</b>
                  </h1>
                  <h1 class="font-bold text-5xl leading-none">
                    <b>lo llevamos</b>
                  </h1>
                </div>
                <p class="font-medium text-2xl">
                  A tu casa, negocio, oficina... A dónde tú  
                </p>
                <p class="font-medium text-2xl">
                  más necesites. A nivel local y nacional.
                </p>
                <br>
                <button class="w-2/4 bg-blue px-4 py-3 mt-5 text-white font-medium">
                  DESCRUBE MÁS AQUÍ
                </button>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div
              class="w-full h-full flex justify-center items-center relative"
            >
              <img
                class="w-full h-full absolute top-0 left-0"
                src="imgs/banners_home/seguimiento.png"
                alt="imagen_slider"
              />
              <div
                class="flex flex-col space-y-3 lg:space-y-0 absolute main-carousel-data text-left"
              >
                <div class="mb-3">
                  <h1 class="font-bold text-5xl leading-none">
                    <b>Seguridad y rapidez</b>
                  </h1>
                  <h1 class="font-bold text-5xl leading-none">
                    <b>con cada envío</b>
                  </h1>
                </div>
                <p class="font-medium text-2xl">
                  Haga seguimiento y conozca el 
                </p>
                <p class="font-medium text-2xl">
                  recorrido y estado de sus envíos.
                </p>
                <br>
                <button class="w-2/4 bg-blue px-4 py-3 mt-5 text-white font-medium">
                  DESCRUBE MÁS AQUÍ
                </button>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div
              class="w-full h-full flex justify-center items-center relative"
            >
              <img
                class="w-full h-full absolute top-0 left-0"
                src="imgs/banners_home/empresa.png"
                alt="imagen_slider"
              />
              <div
                class="flex flex-col space-y-3 lg:space-y-0 absolute main-carousel-data text-left"
              >
                <div class="mb-3">
                  <h1 class="font-bold text-5xl leading-none">
                    <b>Empresa líder en</b>
                  </h1>
                  <h1 class="font-bold text-5xl leading-none">
                    <b>Servicios Logísticos</b>
                  </h1>
                </div>
                <p class="font-medium text-2xl">
                  Brindamos no solo experiencias
                </p>
                <p class="font-medium text-2xl">
                  seguras, sino también saludables.
                </p>
                <br>
                <button class="w-2/4 bg-blue px-4 py-3 mt-5 text-white font-medium">
                  DESCRUBE MÁS AQUÍ
                </button>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=0"></button>
        <button class="glide__bullet" data-glide-dir="=1"></button>
        <button class="glide__bullet" data-glide-dir="=2"></button>
        <button class="glide__bullet" data-glide-dir="=3"></button>
      </div>
    </div>
<!--==============================================================================
                               SERVICIOS CONTENEDOR 
=================================================================================-->
    <div
      class="w-full height-519 flex flex-col justify-center py-16 bg-white relative"
    >
      <div class="text-center">
        <h1 class="w-4/5 lg:w-full m-auto text-4xl font-bold leading-tight">
          Envíos courier, rápido, fácil y seguro
        </h1>
        <p class="w-4/5 lg:w-3/5 m-auto text-lg">
          Faskex Express estamos a la vanguardia para ofrecerle un portafolio de
          servicios, diseñado de acuerdo a las necesidades logísticas de su negocio.
        </p>
      </div>
<!--==============================================================================
                               SERVICIOS SLIDER 
=================================================================================-->
      <div class="height-306 flex flex-col px-5 mt-4 lg:px-40">
        <div class="glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide">
               <!--mensajeria-->
                <div
                  class="w-full flex flex-col justify-center items-center bg-white mb-12 lg:mb-0"
                >
                  <div class="flex flex-col items-center justify-center py-8">
                    <img
                      style="height: 75px"
                      src="imgs/home/icon_mensajeria.png"
                      alt="icono_mensajeria"
                    />
                    <div class="flex flex-col mt-2 text-center">
                      <h1 class="font-bold mb-2">MENSAJERÍA</h1>
                      <p class="text-lg lg:text-xs px-8">
                        Envíe sus documentos a nivel local y nacional de manera rápida y segura.</p>
                    </div>
                  </div>
                  <a href="mensajeria.php"
                    class="w-full py-3 text-center bg-cyan text-white"
                    style="outline: none"
                    id="mensajeria"
                  >
                    VER MÁS
                  </a>
                </div>
              </li>
              <li class="glide__slide">
               <!--courier-->
                 <div
                  class="w-full flex flex-col justify-center items-center bg-white mb-12 lg:mb-0"
                 >
                  <div class="flex flex-col items-center justify-center py-8">
                    <img
                      style="height: 75px"
                      src="imgs/home/icon_courier.png"
                      alt="icon_courier"
                    />
                    <div class="flex flex-col mt-2 text-center">
                      <h1 class="font-bold mb-2">COURIER</h1>
                      <p class="text-lg lg:text-xs px-8">
                        Envíe paquetes y encomiendas a nuestros destinos del norte, centro y sur del país.
                      </p>
                    </div>
                  </div>
                  <a href="courier.php"
                    class="w-full py-3 text-center bg-cyan text-white"
                    style="outline: none"
                    id="courier"
                  >
                    VER MÁS
                  </a>
                </div>
              </li>
              <li class="glide__slide">
               <!--gestiones-->
                <div
                  class="w-full flex flex-col justify-center items-center bg-white mb-12 lg:mb-0"
                >
                  <div class="flex flex-col items-center justify-center py-8">
                    <img
                      style="height: 75px"
                      src="imgs/home/icon_gestiones.png"
                      alt="icon_gestiones"
                    />
                    <div class="flex flex-col mt-2 text-center">
                      <h1 class="font-bold mb-2">
                        GESTIONES TOTALES
                      </h1>
                      <p class="text-lg lg:text-xs px-8">Externalice con nosotros la gestión de sus trámites.</p>
                    </div>
                  </div>
                  <a href="gestionesTotales.php"
                    class="w-full py-3 text-center bg-cyan text-white"
                    style="outline: none"
                    id="gestiones"
                  >
                    VER MÁS
                  </a>
                </div>
              </li>
              <li class="glide__slide">
               <!--outsourcing-->
                <div
                  class="w-full flex flex-col justify-center items-center bg-white mb-12 lg:mb-0"
                >
                  <div class="flex flex-col items-center justify-center py-8">
                    <img
                      style="height: 75px"
                      src="imgs/home/icon_outsourcing.png"
                      alt="outsourcing"
                    />
                    <div class="flex flex-col mt-2 text-center">
                      <h1 class="font-bold mb-2">OUTSOURCING</h1>
                      <p class="text-lg lg:text-xs px-8">
                        Envíe sus documentos a nivel local y nacional de manera rápida y segura.</p>
                    </div>
                  </div>
                  <a id="outsourcing" 
                     href="outsourcing.php" 
                     class="w-full py-3 text-center bg-cyan text-white" 
                     style="outline: none">
                     VER MÁS
                  </a>
                </div>
              </li>
              <li class="glide__slide">
               <!--ecommerce-->
                <div
                  class="w-full flex flex-col justify-center items-center bg-white mb-12 lg:mb-0"
                >
                  <div class="flex flex-col items-center justify-center py-8">
                    <img
                      style="height: 75px"
                      src="imgs/home/icon_ecommerce.png"
                      alt="ecommerce"
                    />
                    <div class="flex flex-col mt-2 text-center">
                      <h1 class="font-bold mb-2">E-COMMERCE</h1>
                      <p class="text-lg lg:text-xs px-8">
                        Envíe paquetes y encomiendas a nuestros destinos del norte, centro y sur del país.
                      </p>
                    </div>
                  </div>
                  <a href="ecommerce.php"
                  class="w-full py-3 text-center bg-cyan text-white"
                  id="ecommerce"
                  style="outline: none">
                    VER MÁS
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
              <div class="top-arrow"></div>
              <div class="bottom-arrow"></div>
            </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
              <div class="top-arrow"></div>
              <div class="bottom-arrow"></div>
            </button>
          </div>
        </div>
      </div>
    </div>
<!--==============================================================================
                                EXPERIENCIA
=================================================================================-->
    <div
      class="w-full bg-cover bg-no-repeat pb-12 lg:pb-24"
      style="background-image: url(imgs/home/img_experiencia_faskex.png)"
    >
      <div class="w-full lg:w-3/5 flex flex-col items-center relative px-12 lg:mx-4">
        <div class="text-center pt-16">
          <h1 class="text-4xl font-bold leading-0">
            <b>Experiencia Faskex</b>
          </h1>
          <p class="text-lg font-medium leading-0">
            Ofrecemos servicios logísticos ágiles, seguros y modernos,
            desarrollados para cumplir con necesidades cada vez más exigentes.
          </p>
        </div>

        <div class="glide pb-5 mt-12">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide flex justify-center">
                <div class="w-40 flex flex-col items-center mb-8 lg:mb-0">
                  <div
                    class="w-32 h-32 flex justify-center items-center bg-white rounded-full cursor-pointer"
                  >
                    <img
                      class="w-20"
                      src="imgs/home/icon_seguimiento.png"
                      alt="icono_gestiones"
                    />
                  </div>
                  <div class="flex flex-col mt-2 text-center">
                    <h2 class="font-bold text-base">Sin límite de tiempo o de lugar</h2>
                  </div>
                </div>
              </li>
              <li class="glide__slide flex justify-center">
                <div class="w-40 flex flex-col items-center">
                  <div
                    class="w-32 h-32  flex justify-center items-center bg-white rounded-full cursor-pointer"
                  >
                    <img
                      class="w-20"
                      src="imgs/home/icon_tiempo.png"
                      alt="icono_gestiones"
                    />
                  </div>
                  <div class="flex flex-col mt-2 text-center mb-8 lg:mb-0">
                    <h2 class="font-bold text-base">Velocidad como prioridad</h2>
                  </div>
                </div>
              </li>
              <li class="glide__slide flex justify-center">
                <div class="w-40 flex flex-col items-center">
                  <div
                    class="w-32 h-32  flex justify-center items-center bg-white rounded-full cursor-pointer"
                  >
                    <img
                      class="w-20"
                      src="imgs/home/icon_atencion.png"
                      alt="icono_gestiones"
                    />
                  </div>
                  <div class="flex flex-col mt-2 text-center mb-8 lg:mb-0">
                    <h2 class="font-bold text-base">Atención personalizada</h2>
                  </div>
                </div>
              </li>
              <li class="glide__slide flex justify-center">
                <div class="w-40 flex flex-col items-center mb-8 lg:mb-0">
                  <div
                    class="w-32 h-32  flex justify-center items-center bg-white rounded-full cursor-pointer"
                  >
                    <img
                      class="w-20"
                      src="imgs/home/icon_tarifas.png"
                      alt="icono_gestiones"
                    />
                  </div>
                  <div class="flex flex-col mt-2 text-center">
                    <h2 class="font-bold text-base">Tenemos las mejores tarifas</h2>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div
            class="glide__bullets bullets__services"
            data-glide-el="controls[nav]"
          >
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
            <button class="glide__bullet" data-glide-dir="=3"></button>
          </div>
        </div>
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

    <div
      class="w-full height-444 max-w-screen-xl m-auto relative flex flex-col lg:flex-row justify-between items-center bg-white relative"
    >
      <img
        class="w-full h-full absolute hidden lg:block"
        src="imgs/home/img_wsp.png"
        alt="fondo_contacta_whatsapp"
      />
      <div class="flex flex-col lg:w-3/5 py-12 px-12 px-0" style="z-index: 1">
        <div class="flex flex-col">
          <h1 class="text-3xl font-bold"><b>Porque ahora somos...</b></h1>
        </div>
        <div class="my-8 text-blue">
          <h1 class="text-5xl font-bold"><b>+ Millenials</b></h1>
          <h1 class="text-5xl font-bold"><b>+ Cercanos</b></h1>
          <h1 class="text-5xl font-bold"><b>+ Rápidos</b></h1>
        </div>
        <h1 class="text-3xl font-bold"><b>Te lo ponemos más fácil</b></h1>
      </div>
      <div class="flex flex-col lg:w-3/5 pb-8 lg:pb-0" style="z-index: 1">
        <div class="w-full flex flex-col">
          <h1 class="text-5xl font-bold leading-none">Ahora también WHATSAPP</h1>
        </div>
        <div class="flex items-center">
          <div class="w-32 h-32 my-5 bg-black"></div>
          <div class="lg:w-1/2 text-left pl-8 hidden lg:block">
            <p>Escanéa este código QR que aparece en esta seccón y añádenos a tus contactos.</p>
          </div>
        </div>
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
//variables
  let htmlLista="<a href='index.html' class='w-full text-left' style='cursor: pointer'><i class='material-icons' id='arrow_list'>arrow_forward</i><span class='ml-8'>HOME</span><hr/></a>";
//declarando las funsiones
  let titulo=()=>document.title ="FASKEX EMPRESA ESPECIALIZADA DE COURIER EN TODO EL PAIS";
  let lista=()=>{document.getElementById("listHome").innerHTML = htmlLista;}
//llamando las funsiones    
  titulo();
  lista();   
    </script>
    <script type="text/javascript">

/*====================================================================================
                               CAROUSEL
======================================================================================*/
      document.querySelectorAll(".glide").forEach((item, index) => {
        if (index === 0) {
          new Glide(item).mount();
        } else {
          new Glide(item, {
            type: "carousel",
            perView: 3,
            breakpoints: {
              600: {
                perView: 1,
              },
            },
          }).mount();
        }
      });
    </script>

 <script type="application/ld+json">
{
 "@context" : "http://schema.org",
 "@type" : "SoftwareApplication",
 "name" : "Faskex",
 "url" : "https://www.faskex.com",
 "sameAs" : [
   "https://www.facebook.com/faskexexpres/",
   "https://twitter.com/Faskex",
   "https://www.linkedin.com/in/faskex-express-01a9a7104/?trk=hp-identity-name",
   "https://www.youtube.com/channel/UCLGFemLpIKO-O3SIsCxmq7g",
   "https://www.instagram.com/faskex/"
  ],
 "address": {
   "@type": "PostalAddress",
   "streetAddress": "Gral. Córdova 1857, Lince 15073",
   "addressRegion": "LIMA",
   "postalCode": "15073",
   "addressCountry": "PE"
 }
}
</script>

  </body>
</html>
