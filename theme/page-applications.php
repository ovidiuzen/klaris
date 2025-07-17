<?php
get_header();
?>

	<section id="primary">
		<main id="main" class="container mx-auto p-4">
        <h1 class="text-6xl font-bold uppercase mb-4">Applications</h1>
        <?php
        $args = array(
            'post_type' => 'application',
            'posts_per_page' => -1,
        );
        $applications = new WP_Query($args);
       
        if ($applications->have_posts()) : ?>

        <div>
            <?php while ($applications->have_posts()) : $applications->the_post(); ?>
            <div class="py-4 border-b border-gray-200">
                <h2 class="text-2xl"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h2>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else: ?>
            <p><?php echo esc_html__('No applications found.', 'klaris') ?></p>
        <?php endif;?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
