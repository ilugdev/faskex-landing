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
      <div class="w-1/2 hidden lg:block pr-5">
        <img
          class="h-full"
          src="imgs/cotizador/cotizador_banner.png"
          alt="cotizar_imagen"
        />
      </div>
      <div
        class="w-full lg:w-1/2 flex flex-col justify-center text-white px-5 lg:px-0 lg:pr-20 py-5 lg:py-0 lg:-mt-12"
      >
        <p class="font-light text-sm">Faskex / Cotiza tu envío</p>

        <h1 class="font-bold text-4xl mt-2">Cotiza tu envío</h1>
        <p class="leading-tight text-justify">
        Calcula el valor para todo tipo de envíos urgentes de paquetería y documentación, ya sean locales o nacionales. Cualquiera que sea tu necesidad, estamos seguros de que podemos ayudarte a ahorrar en tus envíos sin renunciar a la calidad del servicio.
        </p>

        <h2 class="font-bold mt-8 mb-3">¡También contamos con TARIFAS CORPORATIVAS!</h2>
        <p class="leading-tight text-justify">
        Para aquellas empresas con una actividad logística constante, contamos con tarifas corporativas a la medida de sus necesidades.
        </p>
        <p class="mt-3">
        Consigue ahora tu tarifa coorporativa con los mejores descuentos por volumen. Cuanto mayor sea el volumen de tus envíos, mayores descuentos podrás conseguir. Consulta con nuestros asesores comerciales y empieza a disfrutar de las tarifas más competitivas.
        </p>
      </div>
    </div>

    <div></div>

    <div
      class="w-full flex flex-col text-center items-center bg-yellow p-12"
    >
      <div class="flex flex-col mr-12">
        <h1 class="text-3xl font-bold">
          Tú decides a donde enviar y nosotros cumplimos
        </h1>
        <p class="text-lg font-medium">
          Nuestro servicio es 100% en linea, amigable y el más económico del
          mercado.
        </p>
      </div>
    </div>

    <div class="w-full flex">
      <form
        id="cotizar"
        class="w-full lg:w-1/2 flex flex-col justify-center px-8 lg:px-20 py-5 lg:py-0"
      >
        <div class="flex mt-6 space-x-12">
          <label>
            <input
              type="radio"
              name="nivel"
              value="nivel_local"
              checked
              onclick="checkNivel(event)"
            />
            A nivel Local
          </label>
          <label>
            <input
              type="radio"
              name="nivel"
              value="nivel_nacional"
              onclick="checkNivel(event)"
            />
            A nivel Nacional
          </label>
        </div>
        <h1 id="form-title" class="text-4xl font-bold text-center mt-3 mb-4">
          Envíos Locales
        </h1>
        <select name="type" class="w-full h-8 lg:h-10 border border-black pl-2">
          <option value="Documentos">Documentos</option>
          <option value="Paquetes">Paquetes</option>
        </select>
        <div class="w-full flex space-x-3 mt-3">
          <select
            name="lugar_origen"
            class="w-1/2 h-8 lg:h-10 border border-black pl-2"
          >
            <option hidden>Lugar de Origen</option>
            <option value="Ancon">Ancon</option>
            <option value="Ate">Ate</option>
            <option value="Barranco">Barranco</option>
            <option value="Breña">Breña</option>
            <option value="Callao">Callao</option>
            <option value="Carabayllo">Carabayllo</option>
            <option value="Cercado">Cercado</option>
            <option value="Cieneguilla">Cieneguilla</option>
            <option value="Comas">Comas</option>
            <option value="Chaclacayo">Chaclacayo</option>
            <option value="Chorrillos">Chorrillos</option>
            <option value="Chosica">Chosica</option>
            <option value="El Agustino">El Agustino</option>
            <option value="Independencia">Independencia</option>
            <option value="Jesus">Jesus</option>
            <option value="María">María</option>
            <option value="La Molina">La Molina</option>
            <option value="La Perla">La Perla</option>
            <option value="La Punta">La Punta</option>
            <option value="La Victoria">La Victoria</option>
            <option value="Lince">Lince</option>
            <option value="Los Olivos">Los Olivos</option>
            <option value="Lurigancho">Lurigancho</option>
            <option value="Lurín">Lurín</option>
            <option value="Magdalena">Magdalena</option>
            <option value="Miraflores">Miraflores</option>
            <option value="Pachacamac">Pachacamac</option>
            <option value="Pucusana">Pucusana</option>
            <option value="Pueblo">Pueblo</option>
            <option value="Libre">Libre</option>
            <option value="Puente">Puente</option>
            <option value="Piedra">Piedra</option>
            <option value="Punta">Punta</option>
            <option value="Negra">Negra</option>
            <option value="Punta">Punta</option>
            <option value="Hermosa">Hermosa</option>
            <option value="Rimac">Rimac</option>
            <option value="San Bartolo">San Bartolo</option>
            <option value="San Isidro">San Isidro</option>
            <option value="San Borja">San Borja</option>
            <option value="San Juan De Miraflores">
              San Juan De Miraflores
            </option>
          </select>
          <select
            name="lugar_destino"
            class="w-1/2 h-8 lg:h-10 border border-black pl-2"
          >
            <option hidden>Lugar de Destino</option>
            <option value="Aguaytia">Aguaytia</option>
            <option value="Andahuaylas">Andahuaylas</option>
            <option value="Arequipa">Arequipa</option>
            <option value="Ayacucho">Ayacucho</option>
            <option value="Ayaviri">Ayaviri</option>
            <option value="Bagua Chica">Bagua Chica</option>
            <option value="Barranca">Barranca</option>
            <option value="Bellavista">Bellavista</option>
            <option value="Cajamarca">Cajamarca</option>
            <option value="Camana">Camana</option>
            <option value="Cañete">Cañete</option>
            <option value="Casma">Casma</option>
            <option value="Celendim">Celendim</option>
            <option value="Chachapoyas">Chachapoyas</option>
            <option value="Chancay">Chancay</option>
            <option value="Chepen">Chepen</option>
            <option value="Chiclayo">Chiclayo</option>
            <option value="Chimbote">Chimbote</option>
            <option value="Chincha">Chincha</option>
            <option value="Chota">Chota</option>
            <option value="Chulucanas">Chulucanas</option>
            <option value="Cutervo">Cutervo</option>
            <option value="Espinar">Espinar</option>
            <option value="Gran Chimú">Gran Chimú</option>
            <option value="Huacho">Huacho</option>
            <option value="Huancavelica">Huancavelica</option>
            <option value="Huancayo">Huancayo</option>
            <option value="Huánuco">Huánuco</option>
            <option value="Huaral">Huaral</option>
            <option value="Huaráz">Huaráz</option>
            <option value="Huarmey">Huarmey</option>
            <option value="Huarochirí">Huarochirí</option>
            <option value="Huaytará">Huaytará</option>
            <option value="Ilo">Ilo</option>
            <option value="Iquitos">Iquitos</option>
            <option value="Jaen">Jaen</option>
            <option value="Juanjui">Juanjui</option>
            <option value="Juliaca">Juliaca</option>
            <option value="Junín">Junín</option>
            <option value="Lambayeque">Lambayeque</option>
            <option value="Lamas">Lamas</option>
            <option value="La Merced">La Merced</option>
            <option value="La Oroya">La Oroya</option>
            <option value="Los Órganos">Los Órganos</option>
            <option value="Madre de Dios">Madre de Dios</option>
            <option value="Marcona">Marcona</option>
            <option value="Matucana">Matucana</option>
            <option value="Mollendo">Mollendo</option>
            <option value="Moquegua">Moquegua</option>
            <option value="Moyobamba">Moyobamba</option>
            <option value="Nazca</option>">Nazca</option>
            <option value="Naranjos Altos">Naranjos Altos</option>
            <option value="Nva. Cajamarca">Nva. Cajamarca</option>
            <option value="Octubamba">Octubamba</option>
            <option value="Oxapampa">Oxapampa</option>
            <option value="Pacasmayo">Pacasmayo</option>
            <option value="Paijan">Paijan</option>
            <option value="Paita">Paita</option>
            <option value="Palpa">Palpa</option>
            <option value="Pasco">Pasco</option>
            <option value="Piura">Piura</option>
            <option value="Pucallpa">Pucallpa</option>
            <option value="Puno">Puno</option>
            <option value="Quillabamba">Quillabamba</option>
            <option value="Rioja">Rioja</option>
            <option value="Satipo">Satipo</option>
            <option value="Sullana">Sullana</option>
            <option value="Tacna">Tacna</option>
            <option value="Talara">Talara</option>
            <option value="Tarapoto">Tarapoto</option>
            <option value="Tarma">Tarma</option>
            <option value="Tingo María">Tingo María</option>
            <option value="Tocache">Tocache</option>
            <option value="Tumbes">Tumbes</option>
            <option value="Trujillo">Trujillo</option>
            <option value="Villa Rica">Villa Rica</option>
            <option value="Virú">Virú</option>
            <option value="Yauri">Yauri</option>
            <option value="Yurimaguas">Yurimaguas</option>
            <option value="Otros...">Otros...</option>
          </select>
        </div>
        <select
          name="tipo_via"
          class="w-full h-8 lg:h-10 hidden border border-black pl-2 mt-3"
        >
          <option hidden>Seleccione tipo de Vía</option>
          <option value="terrestre">Terrestre</option>
          <option value="area">Aérea</option>
        </select>
        <div class="flex space-x-3 mt-3">
          <input
            type="number"
            class="w-1/2 h-8 lg:h-10 border border-black pl-3"
            placeholder="Peso (gr.)"
          />
          <input
            type="number"
            class="w-1/2 h-8 lg:h-10 border border-black pl-3"
            placeholder="Cantidad"
          />
        </div>

        <div class="w-full flex mt-8" style="align-self: center">
          <div id="paquete_container" class="w-full flex justify-center">
            <img
              id="tipo_paquete"
              class="w-24 h-24 lg:w-40 lg:h-40"
              src="imgs/cotizador/img_documentos.png"
              alt="paquete_o_documento"
            />
          </div>
          <div
            id="paquete_dimensiones"
            class="w-1/2 flex flex-col space-y-3"
            style="display: none"
          >
            <h1 class="text-md text-blue font-black">DIMENSIONES</h1>
            <input
              type="number"
              class="w-full h-8 lg:h-10 border border-black pl-3"
              placeholder="Ancho (cm.)"
            />
            <input
              type="number"
              class="w-full h-8 lg:h-10 border border-black pl-3"
              placeholder="Largo (cm.)"
            />
            <input
              type="number"
              class="w-full h-8 lg:h-10 border border-black pl-3"
              placeholder="Alto (cm.)"
            />
          </div>
        </div>

        <div class="flex mt-8 mb-8 space-x-5" style="align-self: center">
          <button
            class="w-32 lg:w-40 h-8 lg:h-10 bg-blue text-white text-center cursor-pointer"
            onclick="resetForm(event)"
          >
            CANCELAR
          </button>
          <input
            class="w-32 lg:w-40 h-8 lg:h-10 bg-blue text-white text-center cursor-pointer"
            type="submit"
            value="ENVIAR"
          />
        </div>
      </form>
      <div class="w-1/2 h-full hidden lg:flex">
        <img
          class="w-full h-full"
          style="object-fit: fill"
          src="imgs/cotizador/img_envios.png"
          alt="imagen_repartidor con paquete"
        />
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
//variables
  let htmlLista="<a href='cotizar.html' class='w-full text-left' style='cursor: pointer'><i class='material-icons' id='arrow_list'>arrow_forward</i><span class='ml-8'>COTIZADOR</span></a><hr/>";
//declarando las funsiones
  let titulo=()=>document.title ="FASKEX | SERVICIO DE COTIZADOR";
  let lista=()=>{document.getElementById("cotizador").innerHTML = htmlLista;}
//llamando las funsiones    
  titulo();
  lista();
</script>
    <script>
      let formTitle = document.querySelector("#form-title");
      let paquete_container = document.querySelector("#paquete_container");
      let imgPaquete = document.querySelector("#tipo_paquete");
      let paquete_dimensiones = document.querySelector("#paquete_dimensiones");
      let cotizarForm = document.querySelector("#cotizar");
      let tipo_via_select = document.querySelector("select[name=tipo_via]");
      let nivel_radio_btn = Array.from(
        document.querySelector("input[type=radio][name=nivel]")
      );

      const TYPES_PACKAGE_IMG = [
        "imgs/cotizador/img_documentos.png",
        "imgs/cotizador/img_paquete.png",
      ];

      //cambiar form title al cambiar de nivel
      function checkNivel({ target }) {
        let { value } = target;

        if (value === "nivel_local") {
          formTitle.innerHTML = "Envíos Locales";
          tipo_via_select.style.display = "none";
        } else {
          formTitle.innerHTML = "Envíos Nacionales";
          tipo_via_select.style.display = "block";
        }
      }

      //cambiar imagen al cambiar de paquete
      document
        .querySelector("select[name=type]")
        .addEventListener("change", ({ target }) => {
          let { value } = target;

          if (value.toLowerCase() === "documentos") {
            imgPaquete.src = TYPES_PACKAGE_IMG[0];
            paquete_dimensiones.style.display = "none";
            paquete_container.style.width = "100%";
          } else {
            paquete_container.style.width = "50%";
            paquete_dimensiones.style.display = "flex";
            imgPaquete.src = TYPES_PACKAGE_IMG[1];
          }
        });

      //resetear formulario
      function resetForm(event) {
        event.preventDefault();
        tipo_via_select.style.display = "none";
        paquete_dimensiones.style.display = "none";
        paquete_container.style.width = "100%";

        imgPaquete.src = TYPES_PACKAGE_IMG[0];
        cotizarForm.reset();
      }
    </script>


  </body>
</html>
