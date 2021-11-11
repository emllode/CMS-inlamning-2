<?php /* Template Name: about-page */ ?>

<?php
get_header();
$getDescription = get_field('about_description');
?>

<div class="container">
<div>
    <p class="display-2">about-page</h2>
    <p><?php echo $getDescription; ?></p>  
</div>
</div>

<?php
get_footer();
?>