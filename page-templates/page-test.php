<?php

/*

Template Name: Page Test 

*/



// un petit test 

wp_head() ; 

// test here 

$mypod = pods('faq')  ; 
var_dump($mypod->exists()) ; 


wp_footer() ; 