
<?php
$args = array(
		'posts_per_page' => 1,
		'post__in'  => get_option( 'sticky_posts' ),
		'ignore_sticky_posts' => 1
			);
$query = new WP_Query( $args );
?>
<?php if($query->have_posts()): $query->the_post(); ?>
	<div class="hentry sticky-post
				post-<?php the_ID() ?>">

	
		<div class="post-body">
		 <header class="sticky-header">
		 		<h2 class="sticky-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" 
								title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php the_title(); ?>
					</a>
				</h2>

			<?php
				if ( the_post_thumbnail() ) {
					echo "<div class='post-thumb'>";
						the_post_thumbnail('large');
					echo "</div>";
				}
			?>
			</header>
				<div class="entry-content">
				<?php the_content(); ?>
				</div>
		</div>
	</div>
<?php endif; ?>
