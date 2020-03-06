<?php
  get_header(); // Importerar headern till sidan
  while (have_posts()) {
    the_post();
?>

  <main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<img src="<?php the_post_thumbnail_url(); ?>" />
								<div class="text">
                  <h1><?php the_title(); ?></h1>
                  <p><?php the_content(); ?></p>
                  <?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
    </main>
    
<?php
get_footer();
?> <!-- Importerar footern till sidan -->