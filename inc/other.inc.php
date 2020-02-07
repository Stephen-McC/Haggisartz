<?php
    foreach($productArray as $key => $value){
        if(empty($productArray[$key]['taxonomy_path'][4]))
        {
            include '../inc/productDisplay.inc.php';
        }
    }
?>