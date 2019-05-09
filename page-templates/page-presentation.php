<?php

/*

Template Name: Page Presentation 

*/
	get_header();
?>

<div class="col-12">
    <div class="container">
        

        <?php
        $params = array(
            
        );
        $podPresentation = pods('presentation', $params ) ; 
        while ( $podPresentation->fetch() )
        {

        
        ?>
        <div class="row">
            <div class="col-12 col-lg-8">
            <h2><?php echo $podPresentation->display('post_title') ; ?></h2>
            <p>
                <?php echo $podPresentation->display('post_content') ; ?> 
            </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="<?php echo $podPresentation->display('photo') ; ?>" alt="<?= $podPresentation->display('messagealtphoto') ; ?>">
            </div>
        </div>

        <?php
        }
        ?>

    
    
</div>

<?php get_footer() ; ?>
    