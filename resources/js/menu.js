$(document).ready(function(){
    function toggleNav() {
      var body = document.body;
      var hamburger = document.getElementById('js-hamburger');
      var blackBg = document.getElementById('js-black-bg');

      hamburger.addEventListener('click', function() {
        body.classList.toggle('nav-open');
      });
      blackBg.addEventListener('click', function() {
        body.classList.remove('nav-open');

      });
    }
    toggleNav();
    
    // $('.global-nav__item a').on('click', function(){
    //         $('#js-hamburger').click();
    // });
    
});

