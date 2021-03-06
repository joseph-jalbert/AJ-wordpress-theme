<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package aj
 */
?>
<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemType="http://schema.org/WebPage">
	<?php tha_entry_top(); ?>
	<header class="entry-header">

		<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>

	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="mainContentOfPage">

	<?php the_content(); ?>

	</div><!-- .entry-content -->
	
	<?php tha_entry_bottom(); ?>
</article><!-- #post-## -->
