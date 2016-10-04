<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Project_Go
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
            <div class="row">
                <div class="col-md-4" style="font-size: 12px;">
                    <span class="copyright">10975 Guilford Road, Suite B, Annapolis Junction, MD 20701</span><br />
                    <span class="copyright">301-974-1315</span>
                </div>
                <div class="col-md-4">
                    <div class="footer-social"><?php my_social_media_icons() ?></div>
                </div>
                <div class="col-md-4" style="font-size: 12px;">
                    <span class="copyright">Copyright &copy; Project GO 2016</span><br />
                    <span class="copyright">501 (c) (3)</span>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
