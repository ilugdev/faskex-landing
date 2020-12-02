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
      <div class="w-1/2 h-full hidden lg:block">
        <img
          class="h-full pr-5"
          src="imgs/atencion_al_cliente/img_atencion_cliente.png"
          alt="imagen_personas_sonriendo"
        />
      </div>

      <div
        class="w-full lg:w-1/2 flex flex-col justify-center px-6 lg:px-0 py-10 lg:py-0 ml-3 lg:pr-20 text-white"
      >
        <p class="font-light text-sm">Faskex / Contáctenos</p>

        <h1 class="font-bold text-4xl mt-2">Contáctenos</h1>
        <p class="leading-tight text-justify">
          En Faskex Express resolvemos sus inquietudes, brindándole la mejor
          asistencia y respuesta inmediata, junto con el mejor servicio para el
          envío de sus documentos, paquetes y mercancías a nivel Local o
          Nacional.
        </p>
        <p class="mt-2 leading-tight text-justify">
          ¿Quieres realizar una consulta? ¿Eres una empresa y te gustaría una
          visita comercial? ¿Tienes alguna duda de nuestros servicios?
          Escríbenos, estaremos encantados de ayudarte.
        </p>

        <div class="flex flex-col justify-start mt-5">
          <p class="mb-1">Selecciona tu tipo de consulta:</p>
          <div class="flex flex-col space-y-1 ml-5 select-none">
            <label>
              <input
                type="radio"
                name="consulta"
                value="atencion_cliente"
                onclick="changeView(event)"
                checked
              />
              Servicio de Atención al Cliente
            </label>
            <label>
              <input
                type="radio"
                name="consulta"
                value="consultor_comercial"
                onclick="changeView(event)"
              />
              Necesito la visita de un consultor comercial
            </label>
            <label>
              <input
                type="radio"
                name="consulta"
                value="facturacion"
                onclick="changeView(event)"
              />
              Facturación
            </label>
            <label>
              <input
                type="radio"
                name="consulta"
                value="soporte_web"
                onclick="changeView(event)"
              />
              Soporte Web
            </label>
          </div>
        </div>
      </div>
    </div>

    <div id="view_con" class="w-full flex flex-col lg:flex-row">
<!--==================================================================
                   Servicio de Atención al Cliente     
======================================================================-->
      <section
        id="atencion_cliente"
        class="w-full lg:w-1/2 py-12 px-8 lg:px-20"
      >
        <h1 class="text-3xl font-bold mb-8">
          Atención al Cliente
        </h1>
        <form class="w-full flex flex-col">
          <h1 class="text-cyan font-bold mb-1">DATOS DEL ENVÍO</h1>
          <div class="w-full flex-col">
            <div class="w-full flex items-center space-x-3">
              <p class="w-1/2">Nº de Órden de Servicio</p>
              <div class="w-1/2 flex space-x-3">
                <input
                  class="w-1/3 border border-black pl-2 py-1"
                  type="number"
                  placeholder="Serie"
                  id="sacSerie"
                />
                <input
                  class="w-2/3 border border-black pl-2 py-1"
                  type="number"
                  placeholder="Número"
                  id="sacSerieNumber"
                />
              </div>
            </div>
            <div class="w-full flex space-x-3 mt-3">
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="text"
                placeholder="Cliente (Razón Social)"
                id="sacRuc"
                onkeypress='return validaNumericos(event)'
                maxlength="11"
              />
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="text"
                placeholder="Tipo de Servicio"
                id="sacTypeService"
              />
            </div>
          </div>
          <h1 class="text-cyan font-bold mt-12 mb-1">DATOS DE CONTACTO</h1>
          <div class="w-full flex flex-col items-center">
            <input
              class="w-full border border-black pl-2 py-1"
              type="text"
              placeholder="Nombre completo"
              id="sacName"
            />
            <div class="w-full flex space-x-3 mt-3">
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="email"
                placeholder="E-mail"
                id="sacEmail"
              />
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="text"
                placeholder="Celular"
                maxlength="9"
                onkeypress='return validaNumericos(event)'
                id="sacTlf"
              />
            </div>
            <div class="w-full flex space-x-3 mt-3">
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="text"
                placeholder="Motivo"
                id="sacMotivo"
              />

              <div class="w-full contenedorInput sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 border border-black pl-2 py-1 flex mt-3 sm:mt-0 md:mt-0 lg:mt-0 xl:mt-0"
                  id="contenedorFile"
                >
                  <p id="textfile" class="textInput">
                    * Adjuntar Archivo
                  </p>
                  <input
                    type="file"
                    name="archivo"
                    required
                    id="archivoContact_Ac"
                    accept=".png,.jpg,.jpeg,.pdf,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                  />
                </div>
            </div>
            <textarea
              class="w-full border border-black pl-2 py-1 mt-3 resize-none"
              rows="3"
              placeholder="Comentarios"
              id="sacMsg"
            ></textarea>
            <input
              class="bg-blue px-10 py-2 text-white mt-5 cursor-pointer bloqueo opacity-25"
              type="button"
              value="ENVIAR"
              id="enviar_sac"
            />
          </div>
        </form>
      </section>
<!--==================================================================
                        consultor Comercial   
======================================================================-->
      <section
        id="consultor_comercial"
        class="w-full lg:w-1/2 py-12 px-8 lg:px-20"
        style="display: none"
      >
        <h1 class="text-3xl font-bold mb-8 text-center">
          Consultor Comercial
        </h1>
        <form class="w-full flex flex-col" id="formCC">
          <h1 class="text-cyan font-bold mb-1">DATOS DE CONTACTO</h1>
          <div class="w-full flex flex-col">
            <input
              class="w-full border border-black pl-2 py-1"
              type="text"
              placeholder="Nombre completo"
              id="nombreCC"
            />
            <div class="w-full flex space-x-3 mt-3">
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="email"
                placeholder="E-mail"
                id="emailCC"
              />
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="text"
                placeholder="Celular"
                onkeypress='return validaNumericos(event)'
                maxlength="9"
                id="tlfCC"
              />
            </div>
            <h1 class="text-cyan font-bold mt-12 mb-1 text-left">
              DATOS DE LA EMPRESA
            </h1>
            <div class="w-full flex flex-col items-center">
              <input
                class="w-full border border-black pl-2 py-1"
                type="text"
                placeholder="Razón Social"
                onkeypress='return validaNumericos(event)'
                maxlength="11"
                id="ccRuc"

              />
              <div class="w-full flex space-x-3 mt-3">
                <input
                  class="w-1/2 border border-black pl-2 py-1"
                  type="text"
                  placeholder="Rubro"
                  id="ccRubro"
                />
                <input
                  class="w-1/2 border border-black pl-2 py-1"
                  type="text"
                  placeholder="Dirección"
                  id="ccDireccion"
                />
              </div>
            </div>
            <div class="flex flex-col justify-start mt-2">
              <p class="mb-2">Número de envíos al mes:</p>
              <div class="flex flex-col space-y-3 select-none">
                <label class="text-md">
                  <input type="radio" name="consulta" value="0 a 20 dias" checked />
                  De 0 a 20 envíos/mes
                </label>
                <label class="text-md">
                  <input type="radio" name="consulta" value="21 a 50 dias" />
                  De 21 a 50 envíos/mes
                </label>
                <label class="text-md">
                  <input type="radio" name="consulta" value="mas a 50 dias" />
                  Más de 50 envíos/mes
                </label>
              </div>
            </div>
            <div class="flex justify-center mt-8">
              <input
                class="bg-blue px-10 py-2 text-white cursor-pointer"
                type="button"
                value="ENVIAR"
                id="cc_Send"
              />
            </div>
          </div>
        </form>
      </section>
<!--==================================================================
                           Facturación
======================================================================-->
      <section
        id="facturacion"
        class="w-full lg:w-1/2 py-12 px-8 lg:px-20"
        style="display: none"
      >
        <h1 class="text-3xl font-bold mb-8 text-center">
          Facturación
        </h1>
        <form class="w-full flex flex-col">
          <h1 class="text-cyan font-bold mb-1">DATOS DEL ENVÍO</h1>
          <div class="w-full flex-col">
            <div class="w-full flex items-center space-x-3">
              <p class="w-1/2">Nº de Factura</p>
              <div class="w-1/2 flex space-x-3">
                <input
                  class="w-1/3 border border-black pl-2 py-1"
                  type="number"
                  placeholder="002"
                  id="facturacionSerie"
                />
                <input
                  class="w-2/3 border border-black pl-2 py-1"
                  type="number"
                  placeholder="Número"
                  id="facturacionSerieNumber"
                />
              </div>
            </div>
            <div class="w-full flex space-x-3 mt-3">
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="text"
                placeholder="Cliente (Razón Social)"
                onkeypress='return validaNumericos(event)'
                maxlength="11"
                id="facturacionRuc"
              />
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="text"
                placeholder="Tipo de Servicio"
                id="facturacionServiceType"
              />
            </div>
          </div>
          <h1 class="text-cyan font-bold mt-12 mb-1">DATOS DE CONTACTO</h1>
          <div class="w-full flex flex-col items-center">
            <input
              class="w-full border border-black pl-2 py-1"
              type="text"
              placeholder="Nombre completo"
              id="facturacionName"
            />
            <div class="w-full flex space-x-3 mt-3">
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="email"
                placeholder="E-mail"
                id="facturacionEmail"
              />
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="text"
                placeholder="Celular"
                onkeypress='return validaNumericos(event)'
                maxlength="9"
                id="facturacionTlf"

              />
            </div>
            <textarea
              class="w-full border border-black pl-2 py-1 mt-3 resize-none"
              rows="3"
              placeholder="Comentarios"
              id="facturacionMensaje"
            ></textarea>
            <input
              class="bg-blue px-10 py-2 text-white mt-5 cursor-pointer"
              type="button"
              value="ENVIAR"
              id="facturacion_Send"
            />
          </div>
        </form>
      </section>
<!--==================================================================
                           Soporte web
======================================================================-->
      <section
        id="soporte_web"
        class="w-full lg:w-1/2 py-12 px-8 lg:px-20"
        style="display: none"
      >
        <h1 class="text-3xl font-bold mb-8 text-center">Soporte Web</h1>
        <form class="w-full flex flex-col">
          <h1 class="text-cyan font-bold mb-1">DATOS DE CONTACTO</h1>
          <div class="w-full flex flex-col">
            <input
              class="w-full border border-black pl-2 py-1"
              type="text"
              placeholder="Nombre completo"
              id="swName"
            />
            <div class="w-full flex space-x-3 mt-3">
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="email"
                placeholder="E-mail"
                id="swEmail"
              />
              <input
                class="w-1/2 border border-black pl-2 py-1"
                type="text"
                placeholder="Celular"
                onkeypress='return validaNumericos(event)'
                maxlength="9"
                id="swTlf"
              />
            </div>
            <textarea
              class="w-full border border-black pl-2 py-1 mt-3 resize-none"
              rows="3"
              placeholder="Comentarios"
              id="swMsg"
            ></textarea>
            <div class="flex justify-center mt-8">
              <input
                class="bg-blue px-10 py-2 text-white cursor-pointer"
                type="button"
                value="ENVIAR"
                id="sw_Send"
              />
            </div>
            <div class="w-full flex flex-col mt-8">
              <div class="flex flex-col mb-1">
                <p>
                  También puede comunicarse a nuestro Centro de Atención al
                  Cliente al siguiente número:</p>
              </div>
              <div class="flex items-center space-x-3">
                <img
                  style="width: 30px; height: 30px"
                  src="imgs/atencion_al_cliente/icon_phone.png"
                  alt="icono_telefono"
                />
                <h1 class="font-bold text-4xl">963 348 230</h1>
              </div>
            </div>
          </div>
        </form>
      </section>

      <iframe
        class="w-full lg:w-1/2 h-64 lg:h-auto border-none"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15605.66944911204!2d-77.0379842!3d-12.0835546!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f9ca17ff685edbd!2sFaskex%20Express!5e0!3m2!1ses-419!2spe!4v1600017350331!5m2!1ses-419!2spe"
        frameborder="0"
        allowfullscreen=""
      ></iframe>
    </div>

    <div class="w-full flex justify-center items-center bg-yellow p-12">
      <div class="flex flex-col text-center">
        <h1 class="text-3xl font-bold">
          Cuando sea que quieras ¡Visítenos!
        </h1>
        <p class="text-lg font-medium">
          <b>DIRECCIÓN:</b> Gral. Córdova 1857, Lince LIMA - PERÚ
        </p>
        <p class="text-lg font-medium">
          <b>HORARIO DE ATENCIÓN:</b> De Lunes a Viernes 9:00 a 18:00 horas y
          Sábados de 9:00 a 13:00 horas.
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
    <script type="text/javascript" src="./js/contactoSAC.js"></script>
    <script type="text/javascript" src="./js/consultaComercial.js"></script>
    <script type="text/javascript" src="./js/facturacion.js"></script>
    <script type="text/javascript" src="./js/soporteWeb.js"></script>

<script>
//variables
  let htmlLista="<a href='contactenos.html' style='cursor: pointer' class='w-full text-left'><i class='material-icons' id='arrow_list'>arrow_forward</i><span class='ml-8'>CONTÁCTENOS</span><hr /></a>";
//declarando las funsiones
  let titulo=()=>document.title ="FASKEX | SERVICIO DE CONTACTO";
  let lista=()=>{document.getElementById("contactenos").innerHTML = htmlLista;}
//llamando las funsiones    
  titulo();
  lista();    
</script>
    <script>
      //sections to render
      const scrollToViewCon = document.getElementById("view_con");
      const viewCon = document.querySelectorAll("#view_con > section");
      const sectionsArr = Array.from(viewCon);

      //currect section rendered
      var currectSection = "";

      function getCurrectSection() {
        return currectSection;
      }

      function setCurrectSection(section) {
        currectSection = section;
      }

      function changeDisplay(elem, value) {
        elem.style.display = value;
      }

      function hidePrevSection() {
        changeDisplay(getCurrectSection(), "none");
      }

      //only show first one
      sectionsArr.map((elem, index) => {
        if (index === 0) {
          changeDisplay(elem, "block");

          setCurrectSection(elem);
        } else {
          changeDisplay(elem, "none");
        }
      });

      function changeView(event) {
        //scroll to forms
        scrollToViewCon.scrollIntoView({
          behavior: "smooth",
        });

        sectionsArr.map((elem) => {
          //if match. render that section
          if (event.target.value === elem.id) {
            //hide prevSection
            hidePrevSection();

            //show currect section
            changeDisplay(elem, "block");

            //render currect section
            setCurrectSection(elem);
          }
        });
      }
    </script>
  </body>
</html>
