	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="bg">
							<div class="img-height">
								
								
									<?php the_post_thumbnail(); ?>
								
							</div>
							<div class="info-product">
								<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> Liên hệ</p>
								<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>7 Chổ</p>
								<p><b><i class="fas fa-car"></i>Thương hiệu:</b> TOYOTA</p>
							</div>
						</div>
					</div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>



