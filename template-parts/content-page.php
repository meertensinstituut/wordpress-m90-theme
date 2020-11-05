<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gutenbergtheme
 */

?>

<article id="post-<?php the_ID(); ?>" >
	<header class="entry-content">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
