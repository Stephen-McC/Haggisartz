<?php

  $content = file_get_contents('https://openapi.etsy.com/v2/shops/haggisartz/listings/active?api_key=3knujkzeb5pghvu7r0894rvr&includes=MainImage&fields=url,state,price,title,quantity,category_path,,description&limit=100');

  $etsyPull = json_decode($content, true);

  $products = array();

  foreach($etsyPull['results'] as $key => $value){  

    $products[$key] = $etsyPull['results'][$key];

    if(count($products[$key]['category_path']) > 1){
      $path[] = $products[$key]['category_path'][1];
      $catArray = array_unique($path);
    }

    $productArray[] = $products[$key];    
  }

?>