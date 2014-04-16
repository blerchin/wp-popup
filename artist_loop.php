<?php
$args = array(
		'posts_per_page' 	=> 40,
		'post_type'				=> 'artist',
		'orderby'					=> 'title',
		'order'						=> 'ASC',
			);
$query = new WP_Query( $args );
?>
<h2 class="popup-blue">
meet the artists
</h2>
<p>click on the names to learn more.</p>

<div class="artist-list">
	<ul>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<li class="artist artist-<?php the_ID() ?>">
			<h3 class="artist-name"><?php the_title() ?></h3>
			<div class="artist-statement">
				<div class="thumb"><?php the_post_thumbnail('thumbnail'); ?></div>
				<?php the_content() ?>
			</div>
		</li>
	
	<?php endwhile; ?>
	<?php else : ?>
		<p>No artists found.</p>
	<?php endif; ?>
	</ul>
</div>
