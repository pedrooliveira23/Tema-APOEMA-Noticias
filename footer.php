<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->

 

<div class="cbb two" id="footer">
    <p>Copyright © 2013 Apoema Todos os direitos reservados.</p>
    <ul>
<li><a target="_blank" href="<?php echo esc_url( __( 'http://wordpress.org/', 'apoema' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'apoema' ); ?>"><?php printf( __( 'powered by %s', 'apoema' ), 'WordPress' ); ?></a></li>
      <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../politica-privacidade.html">Política de Privacidade</a></li>
      <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../contato.html">Contato</a></li>
    </ul>
  </div>
		<footer id="colophon" class="site-footer" role="contentinfo">	
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61916720-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>