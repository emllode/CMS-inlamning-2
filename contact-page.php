<?php /* Template Name: contact-page */ ?>

<?php
get_header();
$getHeroTextContact = get_field('get_hero_text');
?>

<div class="container">
<div>
    <p class="display-2">contact-page</h2>
    <p><?php echo $getHeroTextContact; ?></p>  
    <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
</div>
</div>


<?php
get_footer();
?> 