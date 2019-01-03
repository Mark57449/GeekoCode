<?php 

	$categories = get_the_category();
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
	date_default_timezone_set('America/Sao_Paulo');

 ?>

<?php if( is_single() ) : ?>

		    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?>

            <h3 class="mb-0 mt-4 pt-2 border-top"><?php the_title(); ?></h3>
            <p class="text-muted mb-2">Publicado em: <span class="badge badge-danger"><?php echo get_the_date('d/m/y'); ?></span></p>
            <hr>

            <?php the_content(); ?>

            <hr>

            <?php comments_template(); ?>

<?php  else : ?>

			<article id="GO_BlogPost" class="col-md-4 p-2">
				<a href="<?php the_permalink(); ?>">
				<div class="conteudo rounded m-0 p-3 shadow-sm" style="background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%,rgba(0,0,0,0.4) 1%,rgba(0,0,0,0.2) 63%,rgba(0,0,0,0.1) 80%,rgba(0,0,0,0.5) 100%), url('<?php echo $featured_img_url; ?>');">
					
						<?php for ($i=0; $i < count($categories); $i++) { ?>
							<span class="badge badge-danger text-white  px-2 py-1 GO_badge">
								<?php

									if ( ! empty( $categories && $categories[$i]->name !== 'Yay') ) {
										
			    						echo esc_html( $categories[$i]->name );   
									} 
								?>
							</span>
						<?php } ?>
						
		            <h3 class="my-2 pb-2 text-white"><?php the_title(); ?></h3>
		            <div class="row">
		                <div class="col-6 mb-3 d-none">
		                	
		                  	<?php //the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
		                	
		              	</div>
		             </div>
		            <div class="d-flex justify-content-between align-items-end info_area">
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
	        </a>
         	</article>

<?php  endif; ?>