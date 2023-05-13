document.addEventListener("DOMContentLoaded", function() {
    var fechaInput = document.getElementById("fecha");
    fechaInput.addEventListener("focus", function() {
      var picker = new Pikaday({
        field: fechaInput
      });
    });
  });
  