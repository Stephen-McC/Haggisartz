<?php
    foreach($productArray as $key => $value){
        if(empty($productArray[$key]['category_path'][1]))
        {
            include '../inc/productDisplay.inc.php';
        }
    }
?>