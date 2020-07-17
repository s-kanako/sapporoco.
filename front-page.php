<?php  get_header(); ?>


    <div class="container">
        <main class="mainvidual row">
            <div class="mainvidual_inner">
                <div class="mainvidual_inner-txt">
                    <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sapporo_cafe.png" alt=""></h2>
                    <p>カフェと札幌と毎日。</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mainvidual_icon.png" alt="" class="mainvidual_inner-girl">
            </div>
        </main>


        <section class="topService">
            <div class="topService_inner">
                <div class="topService_inner-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hokkaido.png" alt="hokkaido">
                </div>
                <div class="topService_inner-txt">
                    <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service_ttl.png" alt="service_ttl"></h2>
                    <p>テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト 
                        テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト
                        テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト 
                    </p>
                </div>
            </div>
            <div class="btn_about">
                <a href="<?php echo esc_url( home_url( '/service' ) ); ?>" class="btn btn_content">
                    サービスについてみる
                </a>
            </div>
        </section>

        <section class="topNews">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/news_ttl.png" alt=""></h2>
            <div class="topNews_cards">
                <?php
                    $args = array(
                        'posts_per_page' => 3 // 表示件数の指定
                    );
                    $posts = get_posts( $args );
                    foreach ( $posts as $post ): // ループの開始
                    setup_postdata( $post ); // 記事データの取得
                ?>
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
                <?php
                    endforeach; // ループの終了
                    wp_reset_postdata(); // 直前のクエリを復元する
                ?>
            </div>
            <div class="btn_about">
                <a href="<?php echo esc_url( home_url( '/cafe' ) ); ?>" class="btn btn_content">
                    記事一覧をみる
                </a>
            </div>
        </section>

        <section class="ig">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ig_ttl.png" alt="instagram" class="ig_ttl"></h2>
            <div class="ig_inner">
                <div class="ig_inner-gallery">
                    <?php echo do_shortcode('[instagram-feed]') ;?>
                </div>
            </div>
        </section>

        <section class="topAbout">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_ttl.png" alt="about_ttl"></h2>
            <div class="topAbout_inner">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/about_us.png" alt="me">
                <div class="topAbout_inner-txt">
                    <div class="triangle"></div>
                    <p>テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト </p>
                </div>
            </div>
            <div class="btn_about">
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn_content">
                    私たちについてみる
                </a>
            </div>
        </section>








    </div>
<?php  get_footer(); ?>
