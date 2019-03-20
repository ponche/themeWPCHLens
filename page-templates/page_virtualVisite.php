<?php

/*

Template Name: Page Visite Virtuel 

*/

	

// pas besoin d'une boucle, il aura q'un article avec le shotcode de la canvas 3D
echo("begin the-post") ; 
the_post() ; 
echo("end the-post") ; 

echo ("begin post-thumbnail") ; 
the_post_thumbnail('medium') ; 
echo("end post-thumbnail") ; 

echo("begin the-content") ; 
the_content() ; 
echo("end the-content") ; 


get_footer() ; 







