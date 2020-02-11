<?php
    echo
    '<div id="myModal'.$i.'" class= "modal">
        <div class="modal-content">
                <div class="tile modal-tile">
                    <div class="text-center category-drop">
                        <a href="'.$productArray[$key]['url'].'" target="_blank"> 
                            <img src="' . $productArray[$key]['MainImage']['url_fullxfull'] . '"alt="' . $productArray[$key]['title'] . '" class="center resizeModal">
                            <div class="modal-text>
                                <p class="truncate" title= "' . $productArray[$key]['title'] . '">' . $productArray[$key]['title'] . '</p>
                                <p>Price: £' . $productArray[$key]['price'] . '</p>
                                <p>Quantity: ' . $productArray[$key]['quantity'] . '</p> 
                                <p>' . $productArray[$key]['description'] . '</p> 
                            </div>
                        </a>
                    </div>
                </div>
            <span href="#" class="close" data-dismiss="modal" aria-label="close">&times;</span>
        </div>
    </div>';   
?>