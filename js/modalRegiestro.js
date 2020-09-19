/*====================================================================================
                                MOSTRAR CLAVE
======================================================================================*/

//showPassword
function showPassword() {
  let pswd = document.querySelector("#pwd");
  let eyeIcon = document.querySelector("#pwd-hide");

  if (pswd.type === "password") {
    pswd.type = "text";
    eyeIcon.classList.remove("fa-eye");
    eyeIcon.classList.add("fa-eye-slash");
  } else {
    pswd.type = "password";
    eyeIcon.classList.remove("fa-eye-slash");
    eyeIcon.classList.add("fa-eye");
  }
}

//showPassword confirmacion
function showPasswordConfi() {
  let pswd = document.querySelector("#pwdConfi");
  let eyeIcon = document.querySelector("#pwdConfi-hide");

  if (pswd.type === "password") {
    pswd.type = "text";
    eyeIcon.classList.remove("fa-eye");
    eyeIcon.classList.add("fa-eye-slash");
  } else {
    pswd.type = "password";
    eyeIcon.classList.remove("fa-eye-slash");
    eyeIcon.classList.add("fa-eye");
  }
}

/*====================================================================================
                                MODAL registro
======================================================================================*/

function openModalRegistro() {
  $("#modalRegistro").css("display", "block");
}

$(document).ready(function () {
  $("#modalRegistro-open").click(function () {
    $("#modalRegistro").css("display", "block");
  });
});

$(document).ready(function () {
  $("#modalRegistro-close").click(function () {
    $("#modalRegistro").css("display", "none");
  });
});

$(document).ready(function () {
  $("#modalRehistrocancelar").click(function () {
    $("#modalRegistro").css("display", "none");
    document.getElementById("typeDocument").value = "";
    document.getElementById("numberDocument").value = "";
    document.getElementById("NombreRegistro").value = "";
    document.getElementById("numberTelephone").value = "";
    document.getElementById("ruc").value = "";
    document.getElementById("emailRegistro").value = "";
    document.getElementById("emailConfirmar").value = "";
    document.getElementById("pwd").value = "";
    document.getElementById("pwdConfi").value = "";
    let pswd = document.querySelector("#pwdConfi");
    let eyeIcon = document.querySelector("#pwdConfi-hide");

    if (pswd.type === "text") {
      pswd.type = "password";
      eyeIcon.classList.remove("fa-eye-slash");
      eyeIcon.classList.add("fa-eye");
    }
  });
});

/*====================================================================================
                             VALIDAR FORMULARIO de trabajo
======================================================================================*/

// enviadno respuesta de enviar

$(document).ready(function () {
  $("#enviar-registro").click(function () {
    //VARIABLES DECLARADAS
    let typeDocument = (document.getElementById("typeDocument").value = "");
    let numberDocument = (document.getElementById("numberDocument").value = "");
    let NombreRegistro = (document.getElementById("NombreRegistro").value = "");
    let numberTelephone = (document.getElementById("numberTelephone").value =
      "");
    let ruc = (document.getElementById("ruc").value = "");
    let emailRegistro = (document.getElementById("emailRegistro").value = "");
    let emailConfirmar = (document.getElementById("emailConfirmar").value = "");
    let pwd = (document.getElementById("pwd").value = "");
    let pwdConfi = (document.getElementById("pwdConfi").value = "");
    let miTlf = numberTelephone.length;
    let emailRegex = /\w+@\w+\.+[a-z]/;
    let countRuc = ruc.length;

    if (
      typeDocument === "" ||
      numberDocument === "" ||
      NombreRegistro === "" ||
      numberTelephone === "" ||
      ruc === "" ||
      emailRegistro === "" ||
      emailConfirmar === "" ||
      pwd === "" ||
      pwdConfi === ""
    ) {
      swal({
        title: "¡Llene todos los datos!",
        icon: "warning",
        button: "Aceptar",
      });
    } else {
      if (!emailRegex.test(emailRegistro)) {
        swal({
          title: "Formato de correo no valido",
          icon: "warning",
          button: "Aceptar",
        });

        if (miTlf <= 8) {
          swal({
            title: "Formato de tlf no valido",
            icon: "warning",
            button: "Aceptar",
          });
        }
        if (countRuc <= 9) {
          swal({
            title: "EL formato del documento de identidad no valido",
            icon: "warning",
            button: "Aceptar",
          });
        }

        if (numberDocument >= 10) {
          swal({
            title: "EL formato del documento de identidad no valido",
            icon: "warning",
            button: "Aceptar",
          });
        }

        if (emailRegistro != emailConfirmar) {
          swal({
            title: "EL formato del documento de identidad no valido",
            icon: "warning",
            button: "Aceptar",
          });
        }
      }

      if (
        typeDocument != "" &&
        numberDocument != "" &&
        NombreRegistro != "" &&
        numberTelephone != "" &&
        ruc != "" &&
        emailRegistro != "" &&
        emailConfirmar != "" &&
        pwd != "" &&
        emailRegex.test(emailRegistro) &&
        pwdConfi != "" &&
        numberDocument <= 9 &&
        countRuc <= 9 &&
        miTlf == 9 &&
        emailRegistro === emailRegistro
      ) {
        swal({
          title: "Funciona",
          icon: "success",
          button: "Aceptar",
        });
      }
    }
  });
});
