  <footer>
    <div class="row small-uncollapse medium-collapse">
      <div class="medium-6 columns small-only-text-center s-space-below-xs">
        <p>&copy;<?php echo date("Y"); ?> Michael Roach, All Rights Reserved.</p>
      </div>
      <div class="medium-6 columns text-right small-only-text-center">
        <p class="inline">Connect &nbsp; <span class="pipe">|</span> &nbsp;</p>
        <ul class="social">
          <li><a href="https://dribbble.com/michaelroach" target="_blank"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="http://www.linkedin.com/in/roachdesign" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
          <li><a href="https://github.com/roachdesign" target="_blank"><i class="fa fa-github-square"></i></a></li>
        </ul>
      </div>
      
      
    </div>
  </footer>
   </div>
</div>

  
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<?php if ($title == "Projects") { ?><script src="js/jribbble.min.js"></script><?php } ?>
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
