<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @package ThinkUpThemes
 */

get_header(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php thinkup_input_allowcomments(); ?>

			<?php endwhile; ?>
			<?php $args = array(
				'sort_order' => 'asc',
				'sort_column' => 'post_title',
				'hierarchical' => 1,
				'exclude' => '',
				'include' => '',
				'meta_key' => '',
				'meta_value' => '',
				'authors' => '',
				'child_of' => 0,
				'parent' => 11,
				'exclude_tree' => '',
				'number' => '',
				'offset' => 0,
				'post_type' => 'page',
				'post_status' => 'publish'
				); 
				$pages = get_pages($args); 

				foreach ($pages as $page) {
                    $customFields = get_post_custom($page->ID);
					echo "<h1>".$page->post_title."</h1>";
                    echo "<p>".$customFields["summary"][0]."</p>";
                    echo '<a href="'.get_permalink($page->ID).'" class="more-link themebutton">Read More</a>';
				}
			?>
<?php get_footer(); ?>