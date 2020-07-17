<?php get_header(); ?>

<section class="news">
    <div class="news_post">
        <!-- タイトル -->
        <h2 class="news_post-ttl"><?php the_title(); ?></h2>
        <div class="news_post-img">
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'singleimg', 'alt' => the_title_attribute('echo=0'))); ?>
        </div>
        <div class="news_post-content">
            <div class="news_detail">
                <!-- 日付 -->
                <time class="news_detail-time"><?php the_time('Y.m.d'); ?></time>
                <!-- カテゴリー -->
                <div class="news_detail-category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></div>
            </div>
            <?php if (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endif; ?>
        </div>
        <?php the_post_navigation( array( 'prev_text' => '←', 'next_text' => '→' ) ); ?>
    </div> <!-- news post -->
    <div class="btn_about">
        <a href="<?php echo esc_url( home_url( '/cafe' ) ); ?>" class="btn btn_content btn_single">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/green-arrow.png" alt="" width=20 height=20>
            記事一覧ページに戻る
        </a>
    </div>
</section>


<?php get_footer(); ?>