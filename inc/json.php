<?php

  $content = file_get_contents('https://openapi.etsy.com/v2/shops/haggisartz/listings/active?api_key=3knujkzeb5pghvu7r0894rvr&includes=MainImage');
  
  $etsyPull = json_decode($content, true);

  $products = array();

  foreach($etsyPull['results'] as $key => $value){  

    $products[$key] = $etsyPull['results'][$key];

    if(count($products[$key]['taxonomy_path']) > 1){
      $path[] = $products[$key]['taxonomy_path'][4];
      $catArray = array_unique($path);
    }

    $productArray[] = $products[$key];  
  }

?>