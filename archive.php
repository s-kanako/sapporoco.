<?php
    // Template Name: cafe
    get_header();
?>

<section class="posts">
    <div class="posts_inner">
        <div class="posts_cards">
            <?php
            $paged = get_query_var('paged') ?: 1;
            $args = array(
                'post_type' => "post",//投稿タイプ設定
                'posts_per_page' => 6,// 取得記事数
                'paged' => $paged,
            );

            $my_query = new WP_Query($args);
            if ($my_query->have_posts()): while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <article class="topNews_card">
                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'news__img', 'alt' => the_title_attribute('echo=0'))); ?>  
                            <div class="article_content">
                                <div class="article_content-info">
                                    <h2><?php the_title(); ?></h2>
                                    <time><?php the_time('Y.m.d'); ?></time>
                                </div>
                                <div class="article_content-txt">
                                    <?php echo get_the_excerpt(); ?>
                                </div>
                            </div>
                    </article>
                </a>
            <?php endwhile; endif; ?> 
        </div>
        <?php
            if ( function_exists( 'pagination' ) ) :
                pagination( $my_query->max_num_pages, $paged );
            endif;
        ?>   
        <?php wp_reset_postdata(); ?>
    </div>
</section>                                                           

<?php get_footer(); ?>