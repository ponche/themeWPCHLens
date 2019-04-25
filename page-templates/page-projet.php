<?php

/*

Template Name: Page Projet

*/

get_header() ; ?>

<div class="col-12">

    <h2><?php the_title() ; ?></h2>     

    <?php echo do_shortcode('[Rich_Web_Timeline id="1"]') ; ?>

</div>

<?php 
get_footer() ; 



