 <div 
       id="main_modal"
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
            mt-5
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
             src="./imgs/modales/img_registrarse.png" 
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
              id="Registro-close"
          >
              close
          </i>
            <h1  class="
                 text-center 
                 font-bold 
                 pb-5 
                 pt-5 
                 px-8
                 sm:py-0
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
              ¡Quiero ser cliente!
            </h1>
            <p class="
                  text-justify
                  px-8
                  block
                  sm:hidden
                  md:block
                  lg:block
                  xl:block
                  md:px-16
                  lg:px-16
                  xl:px-16                  
                ">
                Registrándote podrás tener acceso al seguimiento de tu envío, ofertas, enterarte de nuestras novedades y mucho más.
            </p>

            <p class="
                text-justify 
                text-blue-600  
                pt-4 
                px-8
                sm:pt-3
                sm:px-16
                md:px-16
                lg:px-16
                xl:px-16   
              ">
                (*) Datos obligatorios
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
                      class="
                        w-full 
                        border 
                        border-black 
                        mt-4
                        sm:mt-3
                        md:mt-3                       
                        lg:mt-3
                        xl:mt-3
                        pl-2 
                        py-1"
                      type="text"
                      placeholder="* Nombre completo"
                      name="registro"
                      required
                      id="registroName"
                    />
                    
                   <div class="
                      w-full 
                      flex-col
                      sm:flex-row 
                      md:flex-row 
                      lg:flex-row 
                      xl:flex-row                    
                      flex 
                      sm:space-x-3
                      md:space-x-3                       
                      lg:space-x-3
                      xl:space-x-3 
                      mt-4
                      sm:mt-3
                      md:mt-3                       
                      lg:mt-3
                      xl:mt-3
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
                           mt-0
                           sm:mt-0
                           md:mt-0                       
                           lg:mt-0
                           xl:mt-0                          
                           "
                         type="text"
                         placeholder="* Celular"
                         name="registroCelular"
                         maxlength="9"
                         required
                         id="registroCelular"
                         onkeypress='return validaNumericos(event)'
                       />
    
                       <input
                         class="
                            w-full
                            mt-4
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
                            py-1"
                         type="text"
                         placeholder="* E-mail"
                         name="registroEmail"
                         maxlength="100"
                         required
                         id="registroEmail"
                       />
                   </div>
                   <textarea 
                       class="
                          w-full 
                          border 
                          border-black 
                          py-1
                          mt-4
                          sm:mt-3
                          md:mt-3                       
                          lg:mt-3
                          xl:mt-3
                        "
                       name="textarea" 
                       maxlength="200"
                       id="mensajeRegistrp"
                       required
                       >Deje un mensaje
                   </textarea>  
                   <div class="flex justify-start mt-8 sm:mt-3 md:mt-3 lg:mt-6 xl:mt-6">
                       <button
                          id="enviar-registro"
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