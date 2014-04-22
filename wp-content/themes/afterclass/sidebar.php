				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
				
					<div class="widget">
					<div class="facebook">
					<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fuistudentlife&amp;width=348&amp;height=258&amp;show_faces=true&amp;colorscheme=dark&amp;stream=false&amp;border_color=%23302C2D&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:348px; height:258px;" allowTransparency="true"></iframe>
					</div>
					</div>
				
					<?php /*get_search_form();*/ ?>

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="help">
						
							<p>Please activate some Widgets.</p>
						
						</div>

					<?php endif; ?>

				</div>