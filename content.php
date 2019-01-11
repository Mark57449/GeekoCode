<?php 

	$categories = get_the_category();
	$url_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');

	// $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
	$featured_img_url = $url_image[0];
	$featured_img_height = $url_image[2];
	$featured_img_width = $url_image[1];

	date_default_timezone_set('America/Sao_Paulo');

 ?>

<?php if( is_single() ) : ?>

			<div class="container px-5">
				<div class="container pr-5">
			    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?>

	            <h3 class="mb-0 mt-4 pt-2 border-top"><?php the_title(); ?></h3>
	            <p class="text-muted mb-2">Publicado em: <span class="badge badge-danger"><?php echo get_the_date('d/m/y'); ?></span></p>
	            <hr>

	            <?php the_content(); ?>

	            <hr>

	            <?php comments_template(); ?>	
	        </div>
        	</div>

<?php  else : ?>
			<?php 
				if (( $post->ID / 2) == 0) {
					$featured_img_height = $featured_img_height - 100;
				}
			?>
			<a href="<?php the_permalink(); ?>">
			<article id="GO_BlogPost" class="p-2 mb-3 shadow-sm" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.7) 100%), url('<?php echo $featured_img_url; ?>'); height: <?php echo $featured_img_height; ?>px;">
				
				<div class="conteudo_thumb m-0 p-3">
					
						<?php for ($i=0; $i < count($categories); $i++) { ?>
							<span class="badge badge-danger text-white shadow-sm px-2 py-1 GO_badge">
								<?php

									if ( ! empty( $categories && $categories[$i]->name !== 'Yay') ) {
										
			    						echo esc_html( $categories[$i]->name );   
									} 
								?>
							</span>
						<?php } ?>
						
		            <h3 class="mt-2 mb-1 p-3 text-white w-100">
		            	<div class="pb-1 font-weight-bold"><?php the_title(); ?></div>
		        	</h3>
		            <div class="d-flexx d-none justify-content-between info_area">
		            	<div class="GO_author">
		            		<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
		            		<span class="mx-1 my-2 text-white"><?php the_author(); ?></span>
		            	</div>
			            <p class="text-white mb-1">
			            	<i class="fas fa-calendar-day"></i>
			            	<time>
			            		<?php
			            			if (get_the_date('d/m/Y') == date('d/m/Y')) {
										Echo 'Hoje';
									} else if(date('m/Y') == get_the_date('m/Y') && (date('d') - get_the_date('d')) == 1 ) {
										Echo 'Ontem';
									} else {
										echo get_the_date();
									}
			            		?>
			            	</time>
			            </p>
		        	</div>
	        	</div>
	        	<div class="extra_content shadow-sm bg-light py-2 px-4 h-100 w-100">
	        		<p class="text-dark"><?php tt_reading_time(); the_excerpt(); ?></p>
	        	</div>
         	</article>
         </a>

<?php  endif; ?>