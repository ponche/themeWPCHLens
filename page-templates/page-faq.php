<?php

/*

Template Name: Page FAQ

*/
	get_header();
?>
   


<section class="container sorting">
    <div class="col-lg-12">

    <div class="row justify-content-around">
        <div class="col-lg-12">
            <h1 class="faq-title">FAQ</h1>
            <p class="faq-text">Retrouvez les questions fréquemment posées et leurs réponses.</p>

       

            
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-lg-12">
        
            <div class="cards">

                

                  <?php 
                  // I create my params array
                  $params = array(
                    'limit' => 15
                  );    
                  $mypod = pods('faq', $params) ; 
                  while( $mypod->fetch() )
                  {
                    ?>
                      <div class=" card [ is-collapsed ] ">
                        <div class="card__inner [ js-expander ]">
                          <span><?php echo $mypod->display('post_title') ; ?></span>
                        </div>
                        <div class="card__expander">
                        <i class="fa fa-times [ js-collapser ]"></i>
                         <?php echo $mypod->display('post_content') ; ?>
                        </div>
                      </div>
                  <?php
                  }
                  ?>

        
            </div>


</section>  
<section class="container-fluid faq"> 
<div class="container form">      

    <div class="row justify-content-around">

            <div class="row justify-content-around">
                    <div class="col-lg-4 text-center">

                        <h3>D’autres questions ?</h3>
                        <p>Faîtes part de vos remarques, poser une question, faire une demande d’éclaircissement ou vous exprimer simplement sur ce projet ?</p>
                    </div>
                    <div class="col-lg-6">
                      <?php echo do_shortcode('[contact-form-7 id="143" title="Formulaire FAQ"]') ; ?>
                    </div>
                </div>
    </div>
</section>

<?php 
get_footer() ; 

