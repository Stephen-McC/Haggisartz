<?php
echo 
'<li class="displaybox">
    <div class="tile">
        <div class="text-center category-drop">
            <a href="' . $productArray[$key]['url'] . '"> 
                <img src="' . $productArray[$key]['MainImage']['url_fullxfull'] . '" alt="test category" class="center resize" height="210" width="210">
                <p class="truncate" title= "' . $productArray[$key]['title'] . '">' . $productArray[$key]['title'] . '</p>
                <p>Price: £' . $productArray[$key]['price'] . '</p>
                <p>Quantity: ' . $productArray[$key]['quantity'] . '</p> 
            </a>
        </div>
    </div>
</li>';
?>

<!-- col-xs-12 col-sm-4  -->