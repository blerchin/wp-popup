<?php
$args = array(
		'page_id' => 2,
			);
$query = new WP_Query( $args );
?>
<?php if($query->have_posts()): $query->the_post(); ?>
	<div class="hentry what-is 
				page-<?php the_ID() ?>">

	
		<div class="post-body">
		 <header class="what-is-header">
		 		<h2 class="what-is-title">
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
