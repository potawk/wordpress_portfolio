<?php get_header(); ?>

<main>
	<section class="wrap news-wrap">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : ?>
				<?php the_post(); ?>
				<h1 class="single-title"><?php the_title(); ?></h1>
				<p class="single-time"><?php the_time('Y/m/d'); ?></p>
				<p><?php the_content(); ?></p>
			<?php endwhile; ?>
		<?php endif; ?>
		<a class="link" href="<?php echo esc_url(home_url('/category/news/')); ?>">一覧に戻る</a>
	</section>
</main>

<?php get_footer(); ?>