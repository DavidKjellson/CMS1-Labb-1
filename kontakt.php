<?php /* Template Name: Kontakt */ ?>

<?php
  get_header();
?> <!-- Importerar headern till sidan -->

<?php
	if (have_posts()) {
	while (have_posts()) {
		the_post();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<h1><?php the_title(); ?></h1>
							<form>
								<label><?php the_content(); ?></label>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>

		<?php } ?>
	<?php } ?>
    
<?php
get_footer();
?> <!-- Importerar footern till sidan -->