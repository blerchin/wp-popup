<?php require( 'header.php' ) ?>	

<?php if ( is_home() ): ?>
	<a name="current-location"></a>
	<?php require( 'sticky_post.php' ) ?>
	<a name="artists"></a>
	<?php require( 'artist_loop.php' ) ?>
<?php endif; ?>

<a name="news"></a>
<?php require( 'post_loop.php' ) ?>

<?php if ( is_home() ): ?>
	<a name="what-is"></a>
	<?php require( 'what_is.php' ); ?>
	<a name="mailing-list"></a>
	<?php require( 'mailchimp_signup.php' ); ?>
<?php endif; ?>
				
<?php require( 'footer.php' )?>	
