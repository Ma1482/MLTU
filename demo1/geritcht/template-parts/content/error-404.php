<?php

/**
 * Template part for displaying the page content when a 404 error has occurred
 *
 * @package geritcht
 */

namespace Geritcht\Geritcht;

$geritcht_options = get_option('geritcht-options');
?>
<div>
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="error-404 not-found">
					<div class="page-content">
						<div class="row">
							<div class="col-sm-12 text-center">
								<?php
								if (!empty($geritcht_options['404_page_image']['url'])) { ?>
									<div class="fourzero-image mb-5">
										<img src="<?php echo esc_url($geritcht_options['404_page_image']['url']); ?>" alt="<?php esc_attr_e('404', 'geritcht'); ?>" />
									</div>
								<?php
								} else {
									$bgurl = get_template_directory_uri() . '/assets/images/redux/404.png'; ?>
									<div class="fourzero-image mb-5">
										<img src="<?php echo esc_url($bgurl); ?>" alt="<?php esc_attr_e('404', 'geritcht'); ?>" />
									</div>
								<?php
								}

								if (!empty($geritcht_options['404_title'])) { ?>
									<h4> <?php
											$four_title = $geritcht_options['404_title'];
											echo esc_html($four_title); ?>
									</h4>
								<?php
								} else { ?>
									<h4><?php esc_html_e('Oops! This Page is Not Found.', 'geritcht'); ?></h4>
								<?php
								}

								if (!empty($geritcht_options['404_description'])) { ?>
									<p class="mb-5">
										<?php $four_des = $geritcht_options['404_description'];
										echo esc_html($four_des); ?>
									</p> <?php
										} else { ?>
									<p class="mb-5">
										<?php esc_html_e('The requested page does not exist.', 'geritcht'); ?>
									</p> <?php
										} ?>

								<div class="d-block">
									<?php
									if (!empty($geritcht_options['404_backtohome_title'])) {
										$btn_text  = esc_html($geritcht_options['404_backtohome_title']);
									} else {
										$btn_text  = 'Back to Home';
									} ?>
									<?php geritcht()->geritcht_get_blog_readmore(home_url(),$btn_text); ?>
								</div>
							</div>
						</div>
					</div><!-- .page-content -->
				</div><!-- .error-404 -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .container -->
</div>