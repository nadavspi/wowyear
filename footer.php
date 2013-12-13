<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WowYear
 */
?>

	</div><!-- #content -->

	<footer id="site-footer" class="cf" role="contentinfo">
    <?php
    if(is_active_sidebar('site-footer')){
    dynamic_sidebar('site-footer');
    }
    ?>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>