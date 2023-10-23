window.addEventListener('scroll', function() {
    var header = document.querySelector('header');
    var logoHeight = document.querySelector('.logo').offsetHeight;
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
    if (scrollTop > logoHeight) {
      header.classList.add('menu-com-sombra');
    } else {
      header.classList.remove('menu-com-sombra');
    }
  });
  