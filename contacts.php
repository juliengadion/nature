<?php
/*
Template Name: contact
*/





get_header();
?>

<div class="back">
    <div class="containercontact">
        <h1 class="contact">Contactez moi :</h1>
        <?php echo do_shortcode( '[contact-form-7 id="130" title="Contact form 1"]' );?>
    </div>
</div>

<?php
get_footer();
?>