<?php /* Template Name: Högerkolumn */ ?>

<?php
  get_header();
?> <!-- Importerar headern till sidan -->

<?php
	if (have_posts()) {
	while (have_posts()) {
		the_post();
?>

<?php 
	$sub_pages = get_posts(array(
		'post_type' => 'page',
		'post_parent' => 6,
		'orderby' => 'name',
		'order' => 'ASC'
	));
?> <!-- Visar sidokolumnen på sidan -->

	<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
						</div>
						<?php
							echo '<aside id="secondary" class="col-xs-12 col-md-3">';
							echo '<ul class="side-menu">';
							foreach ( $sub_pages as $sub_page ) :
								echo '<li>';
								echo '<a href="'.get_permalink( $sub_page ).'">'.get_the_title( $sub_page ).'</a>';
								/* echo $sub_page->post_title; */
								echo '</li>';
							endforeach;
							echo '</ul>';
						echo '</aside>';
						?>
					</div>
				</div>
			</section>
		</main>

		<?php } ?>
	<?php } ?>
    
<?php
get_footer();
?> <!-- Importerar footern till sidan -->