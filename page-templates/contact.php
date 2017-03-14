
<?php
/**
 * Template Name: Contact
 *
 * This template displays a contact form that sends an emnail
 *
 * @package aj
 */ ?>


<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>

		<form id="contact" novalidate="novalidate">
			<p>Name (required)<br />
				<input type="text" name="fname" id="fname" value="" size="40">
			</p>
			<p>
				<input type="text" name="pot" id="pot" value="">
			</p>
			<p>Email (required)<br />
				<input type="email" name="email" id="email" size="40" >
			</p>
			<p>Message<br />
				<textarea name="message" cols="40" id="message" rows="10"></textarea>
			</p>
			<p>
				<button type="submit" value="Send">Send</button>
				<img id="contact_ajax" style="margin:10px; display:none;" src="<?php bloginfo('template_directory');?>/assets/img/ajax-loader.gif"/>
			</p>
			<div id="contact_ajax_response"></div>
		</form>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
