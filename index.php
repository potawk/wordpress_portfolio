<?php get_header(); ?>

<main>
	<div id="mainvisual">
		<picture>
			<source srcset="<?php echo get_template_directory_uri() ?>/img/mainvisual-sp.jpg" media="(max-width: 600px)" width="640" height="420">
			<img src="<?php echo get_template_directory_uri() ?>/img/mainvisual-pc.jpg" alt="mainvisual" width="1920" height="420">
		</picture>
	</div>

	<section id="works" class="wrap">
		<h2 class="section-title works__title">Works</h2>
		<ul class="works__items">
		<?php
		$works_query = new WP_Query(
			array(
				'post_type'      => 'post',
				'category_name' => 'works',
				'posts_per_page' => 6,
			)
		);
		?>
		<?php if ( $works_query->have_posts() ) : ?>
			<?php while ( $works_query->have_posts() ) : ?>
				<?php $works_query->the_post(); ?>
					<li class="works__item"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		</ul>
		<a class="link" href="<?php echo esc_url(home_url('/category/works')); ?>">See More</a>
	</section>

	<section id="news" class="wrap">
		<h2 class="section-title news__title">News</h2>
		<dl>
		<?php
		$news_query = new WP_Query(
			array(
				'post_type'      => 'post',
				'category_name' => 'news',
				'posts_per_page' => 3,
			)
		);
		?>
		<?php if ( $news_query->have_posts() ) : ?>
			<?php while ( $news_query->have_posts() ) : ?>
				<?php $news_query->the_post(); ?>
				<a class="news__items" href="<?php the_permalink(); ?>">
					<dt class="news__date"><?php the_time('Y.m.d'); ?></dt>
					<dd class="news__event"><?php the_title(); ?></dd>
				</a>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		</dl>
		<a class="link" href="<?php echo esc_url(home_url('/category/news')); ?>">See More</a>
	</section>

</main>

<?php get_footer(); ?>