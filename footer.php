<footer>
  <div id="piedpage">
    <p>@Copyright2017 author Cindy Nicolay</p>
  
  </div>
</footer>

<?php wp_footer(); ?>
<!--hook pour faire l'appel des scripts dans le footer-->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory');
  ?>/js/materialize.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');
  ?>/js/plugins.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory');
  ?>/js/main.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
