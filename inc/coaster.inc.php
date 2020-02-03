<?php
    foreach($productArray as $key => $value){
        if($productArray[$key]['category_path'][1] = 'coasters' && !empty($productArray[$key]['category_path'][1]))
        {
            include '../inc/productDisplay.inc.php';
        }
    }
?>
