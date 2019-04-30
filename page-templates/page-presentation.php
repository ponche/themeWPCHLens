<?php

/*

Template Name: Page Présentation 

*/
	get_header();
?>

<!-- c'est moche, c'est juste pour le test -->
<br><br><br> 

<div class="col-12">
    <div class="container">
        <!-- contenu de la page --> 
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2>Le titre </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem minima accusantium nihil illo facere odio dolore, doloremque ipsum eveniet inventore repudiandae officiis perspiciatis molestiae minus. Nisi iusto dolorem doloribus itaque.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatibus quo impedit ut quis reiciendis non assumenda expedita a quam maiores suscipit eveniet culpa esse laboriosam, distinctio odio accusamus quia.
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="#" alt="image de test">
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <h2>Le titre </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem minima accusantium nihil illo facere odio dolore, doloremque ipsum eveniet inventore repudiandae officiis perspiciatis molestiae minus. Nisi iusto dolorem doloribus itaque.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatibus quo impedit ut quis reiciendis non assumenda expedita a quam maiores suscipit eveniet culpa esse laboriosam, distinctio odio accusamus quia.
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="#" alt="image de test">
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <h2>Le titre </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem minima accusantium nihil illo facere odio dolore, doloremque ipsum eveniet inventore repudiandae officiis perspiciatis molestiae minus. Nisi iusto dolorem doloribus itaque.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatibus quo impedit ut quis reiciendis non assumenda expedita a quam maiores suscipit eveniet culpa esse laboriosam, distinctio odio accusamus quia.
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="#" alt="image de test">
            </div>
        </div>  
        <!-- la boucle pods --> 
        <?php
        $podPresentation = pods('presentation') ; 
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
            <?php echo $podPresentation->display('photo') ; ?>
        </div>

        <!-- fin de la boucle pods --> 
        <?php
        }
        ?>
    </div>
    
</div>

<?php get_footer() ; ?>
    