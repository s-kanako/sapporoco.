<?php
// Template Name: Service
get_header(); 
?>


<sectionr class="row service">
    <div class="service_main">
        <h2>カフェのある生活を札幌で。</h2>
        <div class="service_main-concept">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service_main.png" alt="">
            <div class="service_main-concept-txt">
                <h3>CONCEPT</h3>
                <p>Sapporoco.は、札幌の素敵なカフェを紹介するWEBメディアです。
                <br>2020年7月にサービスを開始しました。
                <br>というのも、2020年はコロナウィルスにより、多くの飲食店が被害を受けました。
                <br>札幌のカフェも例外ではありません。
                <br>私たちは、カフェをただの飲食の場としてではなく、町づくりに欠かせない存在だと思っています。
                </p>
            </div>            
        </div>
    </div>

    <div class="service_project">
        <div class="service_project-back"></div>
        <div class="service_project-inner">
            <div class="service_project-content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service_top.png" alt="">
                <div class="service_project-content-txt">
                    <h3>PROJECT</h3>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <div class="btn_about service_btn">
                    <a href="<?php echo esc_url( home_url( '/service' ) ); ?>" class="btn btn_content">
                        カフェ情報をみる
                    </a>
                </div>                
            </div>
        </div>
    </div>

    <div class="service_content">
        <div class="service_content-inner">
            <h3>SERVICE</h3>
            <ul class="service_content-lists">
                <li class="service_content-lists-card">
                    <div class="service_content-lists-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-01.png" alt="">
                    </div>
                    <h3>WEBメディア</h3>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </li>
                <li class="service_content-lists-card">
                    <div class="service_content-lists-img list_img-02">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-02.png" alt="">
                    </div>
                    <h3>WEBメディア</h3>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </li>
                <li class="service_content-lists-card">
                    <div class="service_content-lists-img list_img-03">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-03.png" alt="">
                    </div>
                    <h3>WEBメディア</h3>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </li>
            </ul>
        </div>
        <div class="service_content-back"></div>
        

    </div>
    



</sectionr>



<?php
    get_footer();
?>