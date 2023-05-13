const menuIcon = document.querySelector('.menu-icon');
const menu = document.querySelector('.menu');

menuIcon.addEventListener('click', () => {
  menu.classList.toggle('open');
});

menuIcon.addEventListener('mouseenter', () => {
  menu.classList.add('open');
});

document.querySelector('.menu-item-home').addEventListener('click', function() {
    window.location.href = 'index.php';
  });

  document.querySelector('.menu-item-home').addEventListener('click', function() {
    window.location.href = 'index.php';
  });

 