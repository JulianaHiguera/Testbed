document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('form').addEventListener('submit', function(event) {
      event.preventDefault(); // Evitar que el formulario se envíe
  
      var sistemaOperativo = document.getElementById('sistema-operativo').value;
      var duracion = document.getElementById('duracion').value;
  
      // Mostrar ventana emergente con mensaje de creación del contenedor
      var popupMessage = 'Creando el contenedor...<br>';
      popupMessage += 'Sistema operativo: ' + sistemaOperativo + '<br>';
      popupMessage += 'Duración estimada: ' + duracion + ' minutos';
      alert(popupMessage);
  
      // Crear una instancia del objeto XMLHttpRequest
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'create-container.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  
      // Enviar los datos del formulario al archivo PHP
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Mostrar mensaje de éxito después de que el contenedor se elimine
          var response = xhr.responseText;
          var successMessage = 'El contenedor se ha eliminado correctamente.<br>';
          successMessage += 'Nombre del contenedor: ' + response;
          alert(successMessage);
        } else if (xhr.readyState === 4 && xhr.status !== 200) {
          alert('Se produjo un error al procesar la solicitud.');
        }
      };
  
      xhr.send('sistema-operativo=' + encodeURIComponent(sistemaOperativo) + '&duracion=' + encodeURIComponent(duracion));
    });
  });
  