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

$images = get_field('drawings');

if( $images ): ?>
    <div id="container">
        <?php foreach( $images as $image ): ?>
            <div class="photo">
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>



