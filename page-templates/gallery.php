<?php
/**
 * Template Name: Gallery
 *
 * This template displays a masonry image layout of post thumbnails using the isotope plugin
 *
 * @package aj
 */
get_header(); ?>



<?php 


if($pagename == 'drawings') {
    $images = get_field('drawings');
} elseif ($pagename == 'paintings') {
    $images = get_field('paintings');
}


if( $images ): ?>
    <div class= "popup-gallery" id="container">
        <?php foreach( $images as $image ): ?>
            <a class= "pop" href="<?php echo $image['url']; ?>" class="lightbox-link" title="<?php echo $image['caption']; ?>"
            data-description="<?php echo $image['description']; ?>">
                <div class="image-wrap photo">
                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


<?php get_footer(); ?>
