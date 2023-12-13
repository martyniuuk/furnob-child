<?php get_header(); ?>

<main id="main" class="site-primary overflow">
	<div class="site-content">

		<div class="page-content">
			<div class="container">

				<div class="page-not-found">
					<h1 class="entry-title"><?php esc_html_e('404','furnob'); ?></h1>
					<h2 class="entry-subtitle"><?php esc_html_e('Page Not Found','furnob'); ?></h2>
					<div class="entry-content">
						<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try to search for what you are looking for?','furnob'); ?></p>
					</div>
					<?php get_search_form(); ?>
          
					<a href="<?php echo esc_url( home_url('/') ); ?>" class="button btn-primary mt-30"><?php esc_html_e('Go To Homepage','furnob'); ?></a>
				</div>

			</div>
		</div>

	</div>
</main>

<?php get_footer(); ?>