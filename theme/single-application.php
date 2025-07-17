<?php 
get_header();
?>

<section id="primary">
	<main id="main" class="mx-auto p-4 flex flex-col gap-8">
        <div class="flex items-start justify-between">
            <h1 class="text-6xl font-bold uppercase mb-4"><?php the_title(); ?></h1>
            <div class="w-1/2 flex flex-col gap-4">
                <p><?php the_field('application_description'); ?></p>
                <div class="flex gap-2 w-full">
                    <a href="#" class="w-1/2 bg-gray-900 text-white font-bold uppercase items-center text-center p-3 rounded-sm">View Products</a>
                    <a href="#" class="w-1/2 bg-gray-100  font-bold uppercase items-center text-center p-3 rounded-sm">Contact Help</a>
                </div>
            </div>
        </div>

        <p><img src="<?php echo get_field('application_image')['url']; ?>" /></p>

        <h3 class="text-6xl font-bold mb-4">Features and Benefits</h3>
        <ul class="grid grid-cols-2 gap-4">
            <?php if(have_rows('application_features')): ?>
                <?php while(have_rows('application_features')):  the_row(); ?>
                    <li class="text-lg mb-2 bg-gray-950 text-white p-4 uppercase">
                        <strong><?php echo esc_html(get_sub_field('feature_name')); ?></strong> <?php echo esc_html(get_sub_field('feature_description')); ?>
                    </li>
                <?php endwhile; ?>
            <?php else: ?>
                <li><?php esc_html_e('No features available for this application.', 'klaris'); ?></li>
            <?php endif; ?>
        </ul>


    </main><!-- #main -->
</section><!-- #primary -->


<?php get_footer(); ?>