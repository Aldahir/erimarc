<section class="section-title" id="novos-artigos">
    <div class="container p-0 pt-5">
        <div class="align-content-center justify-content-center row">
            <div class="cajicua-container col-12 col-lg-5 col-md-12 col-sm-6">
                <div class="heading-default">
                    <h2 class="heading-title">consultoria</h2>
                </div>
                <div class="heading-default">
                    <h2 class="heading-title-main">Novos artigos<br>e dicas</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-articles p-5 section-light" id="artigos">
    <div class="container p-0 py-5">
                <?php 
    if ( have_posts() ) :
 
        while ( have_posts() ) :
            the_post();
            ?>
		<div <?php post_class('row justify-content-center align-items-center'); ?> id="post-<?php the_ID(); ?>">
            <div class="col-md-5 entry me-5">
			<?php if ( has_post_thumbnail() ): ?>    
				<a href="<?php the_permalink(); ?>">
					<?php echo get_the_post_thumbnail( get_the_id(), '', array('class' => 'img-fluid') ) ?>
				</a>   
			<?php else: ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php endif; ?>  
            </div>
			
            <div class="col-md-3 mb-4 p-0">
				<div class="excerpt">
                    <div class="post-meta align-items-center text-left clearfix">
                        <span class="heading-title"><?php echo get_the_date('d F - Y'); ?></span>
                        <h2 class="heading-title-main caption-header text-start">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
                        <a href="<?php the_permalink(); ?>" class="btn btn-imfc fw-normal mt-2 rounded-0">
							<span>Ver mais</span>
						</a>
                    </div>
                </div>
			</div>
            <?php
        endwhile;
    else:
        get_template_part( 'template_parts/body/section', 'none' );
    endif; ?>
		</div>
		<div class="d-flex justify-content-center mt-4 flex-direction-row align-self-center align-items-center text-center">
				<a href="https://imfcconsulting.com/blog/" class="btn btn-imfc fw-normal rounded-0"><span>Ver todos os posts</span></a>
			</div>
    </div>
</section>