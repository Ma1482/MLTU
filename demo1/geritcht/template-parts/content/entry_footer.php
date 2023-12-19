<?php
/**
 * Template part for displaying a post's footer
 *
 * @package geritcht
 */

namespace Geritcht\Geritcht;

?>
<div class="blog-footer"> <?php
    get_template_part( 'template-parts/content/entry_taxonomies', get_post_type() );
	get_template_part( 'template-parts/content/entry_actions', get_post_type() ); ?>
</div><!-- .entry-footer -->
</div>
