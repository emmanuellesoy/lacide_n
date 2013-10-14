<script type="text/javascript">
    var wp_url = "<?php bloginfo('wpurl'); ?>";
    var tp_url = "<?php bloginfo('template_directory'); ?>";
    var b = "<?php echo get_permalink(); ?>";
</script>
<?php wp_footer(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mixitup.min.js"></script>
<script>
	$(function(){
     
    $('#resultadosElementos').mixitup();

});
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/premiar.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/carrusel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/single.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/category.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.sticky-kit.min.js"></script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28706457-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>