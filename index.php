<?php
get_header();
?>

		<?php
		if ( have_posts() ) :
		the_post();
		the_content();
		endif;

get_sidebar();
get_footer();
