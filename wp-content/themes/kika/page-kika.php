<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kika
 */

get_header();

$query = new WP_QUERY(array(
    'post_type' => 'kika'
));
?>

    <main id="primary" class="site-main">
		<div class="container">
			<div class="row">
				<?php
					if ($query->have_posts()) {
						while ($query->have_posts()) {?>
							<?php $query->the_post(); ?>
							<div class="item d-inline col-3 mt-3 mb-3">
								<a href="">
									<div class="itemName">
										<?='<h2>'.get_field('pavadinimas', get_the_ID())."</h2>"?>
									</div>
									<div class="itemPrice">
										<?='<h2>'.get_field('kaina', get_the_ID())." eur </h2>"?>
									</div>  
								</a>
							</div>
					<?php }}
				?>
			</div>
		</div>
    </main><!-- #main -->
<?php


get_footer();