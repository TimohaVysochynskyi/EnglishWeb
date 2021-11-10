function ChangePass() {
  alert("Your password won't be so safety after changing");
}

function show_hide_password(target) {
  var input = document.getElementById("password-input");
  if (input.getAttribute("type") == "password") {
    target.classList.add("view");
    input.setAttribute("type", "text");
  } else {
    target.classList.remove("view");
    input.setAttribute("type", "password");
  }
  return false;
}

$("body").on("click", ".password-checkbox", function () {
  if ($(this).is(":checked")) {
    $("#password-input").attr("type", "text");
  } else {
    $("#password-input").attr("type", "password");
  }
});
