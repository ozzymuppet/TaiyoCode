// Render Front End Form
// 
// add_shortcode( 'front-end-product', function () {
	
/* Template Name: ACF Profile Page */
acf_form_head();
get_header(); ?>
<main class="content">
	<?php if (have_posts()) { 
		while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID() ?>" <?php post_class(); ?>>
			<h2 class="page-title"><?php the_title(); ?></h2>
			<?php the_content(''); ?>
			<?php 
			if (is_user_logged_in() && current_user_can('member')) {
				$current_user_id = get_current_user_id();
				acf_form([
					'field_groups' => [1145],
					'post_id' => 'user_' . $current_user_id
				]);
			}
			?>
		</article>
	<?php endwhile;
	} ?>
</main>
<?php 
get_sidebar();
get_footer();
});

// 
// // ******************************* Failed leaderboard attempts *******************************

//// Full Feature Contributors Leaderboard 
function contributors_author_list() {
    $contributor_ids = get_users( array(
        'fields'  => 'ID',
        'orderby' => 'post_count',
        'order'   => 'DESC',
        'who'     => 'authors',
    ) );

    foreach ( $contributor_ids as $contributor_id ) :
        $post_count = count_user_posts( $contributor_id, "product" );

        // Move on if user has not published a post (yet).
        if ( ! $post_count ) {
            continue;
        }
    ?>

    <div class="contributor">
        <div class="contributor-info">
            <div class="contributor-avatar"><?php echo get_avatar( $contributor_id, 132 ); ?></div>
            <div class="contributor-summary">
                <h2 class="contributor-name"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></h2>
                <p class="contributor-bio">
                    <?php echo get_the_author_meta( 'description', $contributor_id ); ?>
                </p>
                <a class="button contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
                    <?php printf( _n( '%d Article', '%d Articles', $post_count, 'twentyfourteen' ), $post_count ); ?>
                </a>
            </div><!-- .contributor-summary -->
        </div><!-- .contributor-info -->
    </div><!-- .contributor -->

    <?php
    endforeach;
}

function contributors_author_list_tiny1() {
    $contributor_ids = get_users( array(
        'fields'  => 'ID',
        'orderby' => 'post_count',
        'order'   => 'ASC',
        'who'     => 'authors',
		'number' => '100',
    ) );

    foreach ( $contributor_ids as $contributor_id ) :
        $post_count = count_user_posts( $contributor_id, "product" );

        // Move on if user has not published a post (yet).
        if ( ! $post_count ) {
            continue;
        }
    ?>

    <div class="contributor">
        <div class="contributor-info">
        	<div class="contributor-summary">
                <h2 class="contributor-name"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?>(<?php echo $post_count ?>)</h2>
            </div><!-- .contributor-summary -->
        </div><!-- .contributor-info -->
    </div><!-- .contributor -->

    <?php
    endforeach;
}


function contributors_author_list_tiny2() {
// 1. We define the arguments to define what we want to recover
$args = array (
    'post_type' => 'product',
    'posts_per_page' => '-1',
);

// 2. We run the WP Query
// The Query
$the_query = new WP_Query ($args);

// 3. we display the number of messages and the authors!
// The Loop
if ($the_query-> have_posts()) {
    //Set arguments to grab all authors with published recipes, and order them by user ID
    $authorArgs = array(
        'orderby' => 'post_count',
        'has_published_posts' => array('product'),
    );

    //Create an array of all authors with recipes published
    $recipeAuthors = get_users($authorArgs);

    //Loop through each recipe author
    foreach($recipeAuthors as $user){
        //Output user post count for recipes
        echo count_user_posts($user->ID, 'product');
        echo ' products for ';

        //Output user's display name
        echo $user->display_name;
        echo '<br />';
    	}
	}
}
