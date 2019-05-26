<?php

get_header();
the_post();
?>
</div>
</div>
<div class="main-carousel">
	<div class="carousel-cell"><img src="https://images.unsplash.com/photo-1497616987741-7fba8102046e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"></div>
  <div class="carousel-cell"><img src="http://pae-web.presonusmusic.com/uploads/products/media/images/studio_one-MEDIABAR08.jpg"></div>
</div>
<div class="container">
<div class="row">
    <header>
		<h1><?php the_title(); ?></h1>
	</header>

	<?php the_content(); ?>
			
<?php
get_footer();
