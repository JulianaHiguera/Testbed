window.addEventListener('resize', function() {
    var windowHeight = window.innerHeight;
    var imageHeight = document.querySelector('img').naturalHeight;
    var container = document.querySelector('.contenedor-resumen-imagen');
  
    if (windowHeight < imageHeight) {
      container.style.height = imageHeight + 'px';
    } else {
      container.style.height = '100%';
    }
  });
  