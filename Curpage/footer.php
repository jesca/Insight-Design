			</div> <!-- end #content -->

		</div> <!-- end .container -->
	</div>	<!-- end #bg2 -->
</div> 	<!-- end #bg -->
<div id="footer">
	<div class="container clearfix">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
		<?php endif; ?>

		<div class="clear"></div>
        <p id="copyright"></p>
	</div> <!--end .container -->
</div> <!-- end #footer -->

	<?php get_template_part('includes/scripts'); ?>
	<?php wp_footer(); ?>
</body>
</html>