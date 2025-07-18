<?php
get_header();
?>

	<section id="primary">
		<main id="main" class="container mx-auto p-4">
        <h1 class="text-6xl font-bold uppercase mb-4">Products</h1>
        <?php
        $args = array(
            'post_type' => 'product_series',
            'posts_per_page' => -1,
        );
        $applications = new WP_Query($args);
       
        if ($applications->have_posts()) : ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php while ($applications->have_posts()) : $applications->the_post(); ?>
            <div class="rounded-sm">
                <img src="<?php echo get_field('series_image')['url']; ?>" alt="<?php echo get_the_title(); ?>" class="w-full h-full object-cover">
                <div>
                    <h2 class="text-2xl"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h2>
                    <p><?php echo get_field('series_description'); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else: ?>
            <p><?php echo esc_html__('No products found.', 'klaris') ?></p>
        <?php endif;?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
