<?php /* Template Name: image-page */ ?>

<?php
get_header();
$getDescription = get_field('image_description');
$getImages = get_field('images');
?>

<div class="container">
<div>
    <p class="display-2">images-page</h2>
    <p><?php echo $getDescription; ?></p>  
    <div>
        <img class="img-fluid" src="<?php echo $getImage; ?>">
    </div>
</div>
</div>

<?php
get_footer();
?>