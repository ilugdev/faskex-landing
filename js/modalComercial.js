/*====================================================================================
                                MODAL CONTACTO COMERCIAL
======================================================================================*/

       $(document).ready(function(){
         $("#modal-open").click(function(){
             $("#modal").css("display", "block");
             $("#sideBar").css("display", "none");
             $(".dark").css("display", "none");
             $("#sideBar").animate({right: '-100%'}, "slow");
             $("#sideBar").css("display", "none");

         });
       });

       $(document).ready(function(){
             $("#modal-close").click(function(){
             $("#modal").css("display", "none");


         });
       });

       $(document).ready(function(){
             $("#modal-cancelar").click(function(){
             $("#modal").css("display", "none");
                document.getElementById("fullName").value="";
                document.getElementById("mailing").value="";
                document.getElementById("tlf").value="";
                document.getElementById("companyName").value=""
                document.getElementById("addressName").value="";             

         });
       });
