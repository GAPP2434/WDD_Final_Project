window.addEventListener('scroll', function() {
    var headerContainer = document.querySelector('.header-container');
    if (window.scrollY > 0) {
        headerContainer.classList.add('scroll');
    } else {
        headerContainer.classList.remove('scroll');
    }
  });