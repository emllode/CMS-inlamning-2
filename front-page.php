<?php
get_header();
$getTitle = get_field('get_title');
$getDescription = get_field('get_description');
$getImage =  get_field('get_image');
$getLinkRegister = get_field('get_link_register');
$getLinkLogin = get_field('get_link_login');
?>

<div class="container">
    <p class="display-4"><?php echo $getTitle; ?></p>
    <div class="column">
        <p><?php echo $getDescription; ?></p>  
        <div>
        <img class="img-fluid" src="<?php echo $getImage; ?>">
        </div>
    </div>
    <div>
        <a class="link" href="<?php echo $getLinkRegister;?>" class="button" target="_blank">Register</button>
        <a class="link" href="<?php echo $getLinkLogin;?>" class="button" target="_blank">Login</button>
    </div>
</div>

<?php
get_footer();
?>