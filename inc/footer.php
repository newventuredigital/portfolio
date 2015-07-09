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
<script src="js/jribbble.min.js"></script>
<script>
$(document).foundation();

$(function(){
var shrinkHeader = 50;
$(window).scroll(function() {
  var scroll = getCurrentScroll();
    if ( scroll >= shrinkHeader ) {
      $('header').addClass('shrink');}
    else { $('header').removeClass('shrink');}
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

<?php if ($title == "Projects") { ?>
$.jribbble.setToken('71a74b23f9824632625ce0dcfbe019ed004746523324e7f4a889caa4d7bec3d2');
$.jribbble.users('michaelroach').shots({per_page: 6}).then(function(shots) {
  var html = [];
  
  shots.forEach(function(shot) {
    html.push('<div class="medium-2 columns small-6 s-space-below">');
    html.push('<a href="' + shot.html_url + '" target="_blank">');
    html.push('<img src="' + shot.images.hidpi + '">');
    html.push('</a></div>');
  });
  
  $('.shots').html(html.join(''));
});
<?php } ?>

    </script>
  </body>
</html>
