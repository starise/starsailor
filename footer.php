</div><!-- #main -->

</div><!-- .wrap -->

<footer <?php hybrid_attr('footer'); ?>>

<div class="wrap">

<?php locate_template(['misc/loop-nav.php'], true); // Loads the misc/loop-nav.php template. ?>

    <p class="credit">
      <?php printf(
        __('Copyright &#169; 2008-%1$s %2$s. Written and maintained by %3$s.', 'starsailor'),
        date_i18n('Y'), hybrid_get_site_link(), '<a href="http://andreabrandi.com/">Andrea Brandi</a>'
    ); ?>
    </p><!-- .credit -->

</div><!-- .wrap -->

</footer><!-- #footer -->

</div><!-- #container -->

<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>
