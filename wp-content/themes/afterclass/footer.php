<div class="container" id="footer">
			<footer role="contentinfo" class="footer">
			
				<div id="inner-footer" class="wrap clearfix">
					
					<nav>
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					<p>Individuals with disabilities are encouraged to attend all University of Iowa-sponsored events. If you are a person with a disability who requires an accommodation in order to participate in this program, please contact <a href="mailto:bret-gothe@uiowa.edu">Bret Gothe</a> in advance at 319-335-3132.</p>
					<p class="attribution">&copy; <?php bloginfo('name'); ?> <?php _e("is powered by", "bonestheme"); ?> <a href="http://wordpress.org/" title="WordPress">WordPress</a> <span class="amp">&</span> <a href="http://www.themble.com/bones" title="Bones" class="footer_bones_link">Bones</a>.</p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
</div>
		
		</div> <!-- end #container -->
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-426753-41']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/division-bar/js/division-bar.js"></script>
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>
