  <footer>
    <div class="row">
      <ul class="social">
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        <li><a href="#"><i class="fa fa-github-square"></i></a></li>
      </ul>
      
    </div>
  </footer>
   </div>
</div>

  
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();

      $(function(){
       var shrinkHeader = 100;
        $(window).scroll(function() {
          var scroll = getCurrentScroll();
            if ( scroll >= shrinkHeader ) {
                 $('header').addClass('shrink');
              }
              else {
                  $('header').removeClass('shrink');
              }
        });
      function getCurrentScroll() {
          return window.pageYOffset || document.documentElement.scrollTop;
          }
      });

      $('#mobile-navigation').hide();
      $('#mobile-button').click(function(e){
        e.preventDefault();
        $('#mobile-navigation').slideToggle()
      });

    </script>
  </body>
</html>
