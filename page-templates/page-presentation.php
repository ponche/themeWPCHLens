<?php

/*

Template Name: Page Presentation 

*/
	get_header();
?>

<div class="col-12">
    <div class="container">
        <!-- contenu de la page --> 
        <div class="row">
            <div class="col-12 col-lg-8 border border-primary">
                <h2>NHL - Pourquoi un Nouvel Hôpital ?</h2>
                <p>
                Le Centre Hospitalier de Lens est un établissement public de santé regroupant des activités de MCO (médecine, chirurgie, obstétrique), de gériatrie et de Psychiatrie et Santé Publique. Il est l’établissement pivot du Groupement Hospitalier de Territoire (...)
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="<?= get_template_directory_uri();?>/img/projet/hopitalActuel.jpg" alt="Hopital">
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <h2>NHL - Pourquoi une reconstruction sur un nouveau site ?</h2>
                <p>
                Une réhabilitation du site existant n’aurait-elle pas été plus simple ? Au début du projet, une étude a été menée pour apporter une réponse à cette question. Tous les paramètres ont été pris en compte et chiffrés. Il a vite été démontré qu’il serait plus (...)
            
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="<?= get_template_directory_uri();?>/img/projet/geographique.jpg" alt="photo implentation">
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <h2>NHL - Quel hôpital pour demain ?</h2>
                <p>
                Le Nouvel Hôpital de Lens proposera les mêmes activités qu’aujourd’hui, en cohérence et en complémentarité avec les autres établissements du GHT de l’Artois. Il aura une capacité d’accueil de 571 lits et places MCO (Médecine, Chirurgie, Obstétrique) (...)
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="<?= get_template_directory_uri();?>/img/projet/mains.jpg" alt="hopital de demain">
            </div>
        </div>  

        <div class="row">
            <div class="col-12 col-lg-8">
                <h2>NHL - Le projet architectural</h2>
                <p>
                L’objectif est de déposer le permis de construire fin 2017 avant d’entamer 3 ans de travaux. En 2017 commencera le travail de dépollution (le terrain est un champ de bataille de la première guerre mondiale - la côté 70) et la ligne Haute Tension qui (...)
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="<?= get_template_directory_uri();?>/img/projet/dessin.jpg" alt="plan hopital de demain">
            </div>
        </div>  

        <div class="row">
            <div class="col-12 col-lg-8">
                <h2>NHL - Qui va construire le Nouvel Hôpital de Lens ?</h2>
                <p>
                onstruire un Nouvel Hôpital dont le budget est de 280M€ n’est pas une mince affaire. Cela nécessite de bien s’entourer. Pour ce faire, le Centre Hospitalier de Lens avait lancé une démarche de marchés publics, appelé «  concours de maîtrise d’œuvre   (...)
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="<?= get_template_directory_uri();?>/img/projet/creation.jpg" alt="creation hopital de demain">
            </div>
        </div> 

        <!-- la boucle pods --> 
        <?php
        $params = array(
            'limit' => 30
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
    