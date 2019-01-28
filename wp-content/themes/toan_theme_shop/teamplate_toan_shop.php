<?php /* Template Name: ToanShop Template */ get_header(); ?>
	<div class="slider_top container">
		<div class="row">
			<div class="col-md-8">
				<div id="owl_shop_toan" class="owl-carousel">
					<?php dynamic_sidebar( 'slide top' ); ?>
				</div>
				    
				    
				
				<script type="text/javascript">
					$(document).ready(function() {
					  $("#owl_shop_toan").owlCarousel({
					  	items: 1,   
					  	autoplay: true,
					  	
					  	loop:true,
					  });
					});
				</script>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<?php dynamic_sidebar( 'slide quang cao top 1' ); ?>
					</div>
					<div class="col-md-12">
						<?php dynamic_sidebar( 'slide quang cao top 2' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<main role="main">
		<div class="container">
			
			
			
				<div class="">
					
					<!-- section -->
					<section class="tong">

						<!-- -->
							<section class="san_pham_moi">
										<h3 class="wrapper-title product-spnew  "><span>Sản phẩm mới nhất</span></h3>
										<div class="carousel-wrap">
											<div class="owl-carousel owl1 group-item">
												<?php
												$args = array(
												'post_type' => 'product',
												'stock' => 1,
												'posts_per_page' => 12,
												'orderby' =>'date'
												);
												$loop = new WP_Query( $args );
												while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
												<div class="block-item">
													<div id="id-<?php the_id(); ?>"  class="item-inner">
														<?php
															if ( $product->is_on_sale() ) {
																echo apply_filters( 'woocommerce_sale_flash', '<div class="woocommerce index"><span class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span></div>', $post, $product );
															}
														?>
														<div class="block-image">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="product placeholder Image"/>'; ?>
															</a>
															<a class="btn-detail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
														</div>
														<h3 class="item-content">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
														</h3>
														<span class="price"><?php echo $product->get_price_html(); ?></span>
													</div>
												</div>
												<?php endwhile; ?>
												<?php wp_reset_query(); ?>
											</div>
										</div>
										<script type="text/javascript">
											$('.owl1').owlCarousel({
											  loop: true,
											  margin: 10,
											  nav: true,
											  dots:false,
											  navText: [
												"<i class='fa fa-chevron-left'></i>",
												"<i class='fa fa-chevron-right'></i>"
											  ],
											  autoplay: true,
											  autoplayHoverPause: false,
											  responsive: {
												0: {
												  items: 2
												},
												600: {
												  items: 3
												},
												1000: {
												  items: 5
												}
											  }
											})
										</script>
									</section>
									<!-- chia cat -->
				
									<section class="san_pham_sale">
										<h3 class="wrapper-title  sibar-abc"><span>Sản phẩm đề xuất</span></h3>
										
										<div class="group-item row">
											<div class="block-item col-md-2 col-sm-3 col-xm6">
												<?php dynamic_sidebar( 'quang cao sp' ); ?>
											</div>
												<?php
												$args = array(
												'post_type' => 'product',
												'stock' => 1,
												'posts_per_page' => 12,
												'meta_key' => 'total_sales',
												'orderby' => 'rand' //meta_value_num ban chạy
												);
												$loop = new WP_Query( $args );
												while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
												<div class="block-item col-md-2 col-sm-3 col-xm6">
													<div id="id-<?php the_id(); ?>"  class="item-inner">
														<?php
															if ( $product->is_on_sale() ) {
																echo apply_filters( 'woocommerce_sale_flash', '<div class="woocommerce index"><span class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span></div>', $post, $product );
															}
														?>
														<div class="block-image">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="product placeholder Image"/>'; ?>
															</a>
															<a class="btn-detail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
														</div>
														<h3 class="item-content">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
														</h3>
														<span class="price"><?php echo $product->get_price_html(); ?></span>
														<button  id="click_btn" class="btn_add_cart "><a href="?add-to-cart=<?php echo $loop->post->ID; ?>" rel="nofollow" data-product-id="<?php echo $loop->post->ID; ?>" class="button">Thêm vào giỏ</a></button>
													</div>
												</div>
												<?php endwhile; ?>
												<?php wp_reset_query(); ?>
										</div>
									</section>
									
									<section class="san_pham_chu_y">
										<h3 class="wrapper-title sibar-abc"><span>Được quan tâm nhất</span></h3>
										<div class="group-item row">
												<?php
												$args = array(
												'post_type' => 'product',
												'stock' => 1,
												'posts_per_page' => 5,
												'meta_key' => '_wc_average_rating',
												'orderby' => 'meta_value_num'
												);
												$loop = new WP_Query( $args );
												while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
												<div class="block-item block-col col-md-2 col-sm-4 col-xm6">
													<div id="id-<?php the_id(); ?>"  class="item-inner">
														<?php
															if ( $product->is_on_sale() ) {
																echo apply_filters( 'woocommerce_sale_flash', '<div class="woocommerce index"><span class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span></div>', $post, $product );
															}
														?>
														<div class="block-image">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="product placeholder Image"/>'; ?>
															</a>
															<a class="btn-detail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
														</div>
														<h3 class="item-content">
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
														</h3>
														<span class="price"><?php echo $product->get_price_html(); ?></span>
													</div>
												</div>
												<?php endwhile; ?>
												<?php wp_reset_query(); ?>
										</div>
									</section>
									<section class="tin_tuc_moi">
										<div class="row">
											<div class="col-md-12">
												<h3 class="wrapper-title  sibar-abc"><span>Tin tức</span></h3>
												<div class="row12">
													<?php
													$loop = new WP_Query(array(
													'post_type'=>'post',
													'post_status'=>'publish',
													'orderby' => 'ID',
													'order' => 'DESC',
													'posts_per_page'=> 4));
													?>
													<?php $i=1; while ($loop->have_posts()) : $loop->the_post(); ?>
													
													<div class="col-md-12 loop_tt">
														<!-- article -->
														<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
															<div class="loop-box index">
																<div class="row">
																	<div class="col-md-1 toan_col_3 col-xs3">
																	<?php if ( has_post_thumbnail()) : ?>
																		<a class="image-post" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																			<?php the_post_thumbnail(array(120,120)); ?>
																		</a>
																	<?php endif; ?>
																	</div>
																	<div class="col-md-11 col-xs10"">
																		<!-- post title -->
																		<h2 class="loop-title">
																			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
																		</h2>
																		<!-- /post title -->
																		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
																	</div>
																</div>
															</div>
														</article>
														<!-- /article -->
													</div>
													
													<?php $i++; endwhile ; wp_reset_query() ;?>
												</div>
											</div>
										</div>
									</section>
									<!-- form lien he -->
									<?php //echo do_shortcode('[contact-form-7 id="109" title="form_lien_he"]'); ?>
									
					
					<!-- /section -->
					</section>
					<!-- /section -->
				</div>
			
		</div>
	</main>

<?php get_footer(); ?>
