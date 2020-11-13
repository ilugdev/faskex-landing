/*====================================================================================
                                   MENU
======================================================================================*/

//MOSTRAR MENU

$(document).ready(function () {
  $("#btn_menu").click(function () {
    $("#sideBar").css("display", "block");
    $("#sideBar").animate({ right: "0%" }, "slow");
    $(".dark").css("display", "block");
    $(".dark").animate({ opacity: "1" });
  });
});

//OCULTAR MENU

$(document).ready(function () {
  $(".menu_close").on("click", function () {
    $("#sideBar").animate({ right: "-100%" }, "slow");
    $(".dark").css("display", "none");
  });
});
