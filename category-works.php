<?php get_header(); ?>

<main>
	<section class="works-wrap wrap">
		<h1 class="section-title works__title">Works</h1>
		<ul class="works-category__items">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
					<li class="works-category__item">
						<a href="<?php the_permalink(); ?>">
							<div><?php the_post_thumbnail(); ?></div>
							<h2 class="works-category__title"><?php the_title(); ?></h2>
							<div class="works-category__content"><?php the_content(); ?></div>
						</a>
					</li>
			<?php endwhile; ?>
		<?php endif; ?>
		</ul>
	</section>
</main>

<?php get_footer(); ?>