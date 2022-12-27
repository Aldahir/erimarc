<?php
/**
 * Ficheiro Search
 *
 * @author Aldair Cajicua
 * 
 * @package IMFC Consulting
 *
 * @year 2022
 */
?>

<?php get_header() ?>
    <main id="main" class="mb-4">
        <style>
            main#main { margin-top: 330px}
            .main {
                top: 35vh;
                color: #fff;
                line-height: 4em;
            }
            .main > .site-content > .title {
                text-transform: capitalize;
                font-weight:700;
                text-align: center;
            }
            .background-overlay {
                min-height: 440px;
                background-color: rgb(75 53 96 / 78%);
            }
        </style>

        <?php $query = get_search_query();
            $terms = array('s' => $query, 'post_type' => 'post');
            $busca = new WP_Query($terms);
        ?>
        <section class="main">
            <div id="content" class="site-content">
                <?php 
                    if ( $busca->have_posts() ) :
                        _e("<h2 class='ms-5 title caption-header'>Resultados da sua pesquisa: ".get_query_var('s')."</h2>");
                ?>
            </div>
        </section>

        <section class="background-overlay"></section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <?php while ( $busca->have_posts() ) :
                            $post = get_post();
                            $busca->the_post(); 
                        ?>
                        <div class="col-md-4 mb-4 entry">
                            <?php  /*if ( $post ) : $categories = get_the_category( $post->ID ); */ ?>

                            <div class="entry-header">          
                            <?php if ( has_post_thumbnail() ): ?>          
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo get_the_post_thumbnail( $post->ID, '', array('class' => 'img-fluid') ) ?>
                                </a>  
                                <?php else: ?>
                                <a href="<?php the_permalink(); ?>"></a>             
                                <?php endif; ?>            
                            </div>
                                    
                            <div class="excerpt">
                                <span class="post-category text-white bg-ns mb-1"><?php echo $categories[0]->name ?></span>
                                <h2 class="mb-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <span class="d-inline-block mt-1">
                                        <i class="fa fa-calendar"></i> &nbsp;<?php echo get_the_date('F d, Y'); ?> &nbsp;
                                        <i class="fa fa-user"></i> &nbsp;<?php the_author_posts_link(); ?> &nbsp;
                                        <i class="fa fa-comment"></i> &nbsp;<?php echo get_comments_number(); ?>
                                    </span>
                                </div>
                            </div>
                                        
                            <?php //endif; ?>
                        </div>     
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </main>

<?php get_footer() ?>
