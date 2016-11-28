<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			<p style="text-align:center;">Customer Service: 1-800-348-4881 ext. 165<br />All content and images &copy; 2016 <a href="https://www.altmanplants.com" target="_blank">Altmans Speciality Plants.</a> All rights reserved. - Grown in Vista, California</p>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
