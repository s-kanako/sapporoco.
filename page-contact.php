<?php
// Template Name: Contact
get_header(); 
?>

<section class="contact">
    <div class="contact_inner">
        <p class="contact-txt">お仕事のご依頼、その他ご意見・ご相談などこちらよりお気軽にお問い合わせください。</p>
        <div class="contact_form">
            <?php echo do_shortcode('[contact-form-7 id="13" title="Contact form 1"]'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>