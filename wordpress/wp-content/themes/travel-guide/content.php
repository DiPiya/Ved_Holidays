<?php
/**
 * @package TravelGuide
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("row archive"); ?>>
	
	<div class="col-md-12 col-xs-12">
	<header class="entry-header col-md-12">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php if (has_post_thumbnail()) : ?>
	<div class="featured-thumb col-md-3 col-xs-12">
		<a href="<?php the_permalink(); ?>">
		<?php
			the_post_thumbnail('travel-thumb');	
		?>
		</a>
	</div>
	<?php endif; ?>
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary col-md-9">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
		<?php if (has_post_thumbnail()) { ?>
			<div class="entry-content col-md-9">
		<?php } else{  ?>
			<div class="entry-content col-md-12">
		<?php } ?>	
			<?php if ( of_get_option('excerpt1', true) == 0 ) : ?>
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'travel-guide' ) ); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages: ', 'travel-guide' ),
						'after'  => '</div>',
					) );
				else :
					the_excerpt();
				endif;		
				?>
			</div><!-- .entry-content -->
	<?php endif; ?>
	</div>
</article><!-- #post-## -->