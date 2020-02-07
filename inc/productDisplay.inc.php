<?php
echo 
'<li class="displaybox">
    <div class="tile">
        <div class="text-center category-drop">
            <a href="' . $productArray[$key]['url'] . '"> 
                <img src="' . $productArray[$key]['MainImage']['url_fullxfull'] . '"alt="' . $productArray[$key]['title'] . '" class="center resize">
                <p class="truncate" title= "' . $productArray[$key]['title'] . '">' . $productArray[$key]['title'] . '</p>
                <p>Price: £' . $productArray[$key]['price'] . '</p>
                <p>Quantity: ' . $productArray[$key]['quantity'] . '</p> 
            </a>
        </div>
    </div>
</li>';
?>



