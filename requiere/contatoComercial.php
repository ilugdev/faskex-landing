<div 
       id="contactComercial"
       class="
         bg-modal
         w-full
         h-full
         fixed
         sm:fixed
         md:fixed
         lgfixed
         xl:fixed  
         z-50
        "
       style="display: none;"
    >
     <div 
         class="
            bg_modalConten
            grid 
            grid-cols-1 
            lg:grid-cols-6 
            xl:grid-cols-6 
            w-11/12
            sm:w-full
            md:w-11/12          
            lg:w-4/6
            xl:w-4/6
            mt-6
            mx-3            
            sm:mt-0
            sm:mx-0
            md:mt-48 
            md:mx-8          
            lg:my-20
            lg:mx-48
            xl:my-20
            xl:mx-48           
            bg-white 
            animate__animated 
            animate__zoomIn
            "
      >
        <div class="
              hidden
              sm:hidden
              md:hidden            
              lg:block 
              xl:block 
              col-start-1 col-span-2
         ">
          <img 
             src="./imgs/modales/img_contacto_comercial.png" 
             alt="modal-img" 
             class="
             hidden
             sm:hidden
             md:hidden            
             lg:block 
             xl:block 
             img_modal
             "
            /> <!---->
        </div>
        
        <div class="
        sm:col-start-1
        lg:col-start-3 
        lg:col-span-4
        xl:col-start-3 
        xl:col-span-4        
        ">
            <i
              class="
                 material-icons 
                 cc-close-right 
                 font-bold 
                 text-4xl
                 text-blue-600
                 cursor-pointer
                 pt-5
                 close_btn
                "
              id="cc_close"
          >
              close
          </i>
            <h1  class="
                 text-center 
                 font-bold 
                 pb-2
                 pt-0 
                 px-8
                 sm:pt-0
                 sm:px-16
                 md:px-16
                 lg:px-16
                 xl:px-16
                 text-2xl
                 sm:text-4xl
                 md:text-4xl
                 lg:text-4xl
                 xl:text-4xl
                               
              ">
              ¡Seamos Equipo!
            </h1>
            <p class="
                  pt-0
                  px-8
                  block
                  md:text-justify           
                  lg:text-justify
                  xl:text-justify
                  sm:hidden
                  md:block
                  lg:block
                  xl:block
                  md:px-16
                  :px-16
                  xl:px-16
                  lg:pt-0
                  xl:pt-0                  
                ">
                Si quieres abrir tu propio negocio, ampliar el que ya tienes o cambiar de rumbo empresarial, te ofrecemos las MEJORES SOLUCIONES LOGÍSTICAS del mercado.
            </p>
            <p class="
            pt-2 
            px-8
            block
            md:text-justify           
            lg:text-justify
            xl:text-justify
            sm:pt-3
            sm:px-16
            md:px-16
            lg:px-16
            xl:px-16   
            sm:hidden
            md:block
            lg:block
            xl:block
          ">
           Déjanos tus datos y nos ponemos en contacto contigo. ¡SIN COMPROMISO!
          </p>

            <form class="
               w-full 
               lg:w-full 
               flex 
               flex-col 
               px-8
               sm:px-16
               md:px-16
               lg:px-16
               xl:px-16           
            ">
                <div class="w-full flex flex-col">
                    <input
                      class="w-full border border-black mt-3 pl-2 py-1"
                      type="text"
                      placeholder="* Nombre completo"
                      name="contactName"
                      required
                      id="nombreContacto"
                    />
                    
                   <div class="
                      w-full 
                      flex 
                      mt-3
                      flex-col
                      sm:flex-row 
                      md:flex-row 
                      lg:flex-row 
                      xl:flex-row                    
                      sm:space-x-3
                      md:space-x-3                       
                      lg:space-x-3
                      xl:space-x-3 
                    ">
                       <input
                         class="
                         w-full 
                         sm:w-1/2 
                         md:w-1/2 
                         lg:w-1/2 
                         xl:w-1/2 
                         border 
                         border-black 
                         pl-2 
                         py-1
                        " 
                         type="text"
                         placeholder="* Celular"
                         name="conTlf"
                         maxlength="9"
                         required
                         id="tlfContacto"
                         onkeypress='return validaNumericos(event)'
                       />
    
                       <input
                         class="
                         w-full
                         mt-3
                         sm:mt-0 
                         md:mt-0 
                         lg:mt-0 
                         xl:mt-0
                         sm:w-1/2 
                         md:w-1/2 
                         lg:w-1/2 
                         xl:w-1/2 
                         border 
                         border-black 
                         pl-2 
                         py-1
                          "
                         type="text"
                         placeholder="* E-mail"
                         name="contEmail"
                         maxlength="100"
                         required
                         id="conctatoCorreo"
                       />
                   </div>
                   <div class="
                   w-full 
                   flex 
                   mt-3
                   flex-col
                   sm:flex-row 
                   md:flex-row 
                   lg:flex-row 
                   xl:flex-row                    
                   sm:space-x-3
                   md:space-x-3                       
                   lg:space-x-3
                   xl:space-x-3 
                    ">
                    <input
                      class="
                      w-full 
                      sm:w-1/2 
                      md:w-1/2 
                      lg:w-1/2 
                      xl:w-1/2 
                      border 
                      border-black 
                      pl-2 
                      py-1
                      "
                      type="text"
                      placeholder="* Empresa"
                      name="Empresa"
                      maxlength="100"
                      required
                      id="contactoEmpresa"
                    />
 
                    <input
                      class="
                      w-full
                      mt-3
                      sm:mt-0 
                      md:mt-0 
                      lg:mt-0 
                      xl:mt-0
                      sm:w-1/2 
                      md:w-1/2 
                      lg:w-1/2 
                      xl:w-1/2 
                      border 
                      border-black 
                      pl-2 
                      py-1
                        "
                      type="text"
                      placeholder="* Dirección"
                      name="direccion"
                      maxlength="200"
                      required
                      id="conctatoDireccion"
                    />
                </div> 
                   <div class="
                      flex 
                      justify-start 
                      mt-4
                      lg:mt-6
                      xl:mt-6 
                    ">
                       <button id="enviar_contacto" 
                          class="bg-blue px-8 py-1 text-white cursor-pointer"
                          type="button">
                            ENVIAR
                       </button>
                   </div>
                </div>
              </form>
        </div>
     </div>
    </div>
 