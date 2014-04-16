<h2 class="blue">
news and previous events
</h2>
<?php $colors_arr = array( 'purple', 'orange', 'blue' ); ?>
<?php $post_count = 0; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if( !is_sticky()): ?>
	<?php $hdr_color = 'popup-' . $colors_arr[$post_count%3] ?>
	<?php $thumb = has_post_thumbnail(); ?>

	<div class="hentry  <?php echo $post_count%2==0 ? 'even' : 'odd';  ?>-post
				post-<?php the_ID() ?>">

	 <h3 class="<?php echo $hdr_color; ?> ">
			<a href="<?php the_permalink() ?>" rel="bookmark" 
						title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php the_title(); ?>
			</a>
		</h3>
	
		<div class="post-body row">

			<?php
				if ( $thumb ) {
					echo "<div class='post-thumb col-md-4'>";
						the_post_thumbnail('medium');
					echo "</div>";
				}
			?>
				<div class="entry-content <?php echo $thumb ? 'col-md-8' : 'col-md-12' ?>">
				<?php the_content(); ?>
				</div>
		</div>
	</div>

	<?php $post_count++ ?>
<?php endif; //!is_sticky ?>
<?php endwhile; else: //loop ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; //loop ?>
<?php posts_nav_link(); ?>
