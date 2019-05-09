<?php

/*

Template Name: Page Presentation 

*/
	get_header();
?>

<div class="col-12">
    <div class="container">
        <!-- contenu de la page --> 
        

        <!-- la boucle pods --> 
        <?php
        $params = array(
            
        );
        $podPresentation = pods('presentation', $params ) ; 
        while ( $podPresentation->fetch() )
        {

        
        ?>
        <!-- un pod -->
        <div class="row">
            <div class="col-12 col-lg-8">
            <h2><?php echo $podPresentation->display('post_title') ; ?></h2>
            <p>
                <?php echo $podPresentation->display('post_content') ; ?> 
            </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="<?php echo $podPresentation->display('photo') ; ?>" alt="photo projet">
            </div>
        </div>

        <!-- fin de la boucle pods --> 
        <?php
        }
        ?>

    
    
</div>

<?php get_footer() ; ?>
    