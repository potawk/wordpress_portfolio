<?php get_header(); ?>

<main>
	<section id="news" class="wrap">
		<h1 class="section-title works__title">News</h1>
		<dl>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<a class="news__items" href="<?php the_permalink(); ?>">
					<dt class="news__date"><?php the_time('Y.m.d'); ?></dt>
					<dd class="news__event"><?php the_title(); ?></dd>
				</a>
			<?php endwhile; ?>
		<?php endif; ?>
		</ul>
	</section>
</main>

<?php get_footer(); ?>