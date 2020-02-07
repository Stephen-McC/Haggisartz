<?php
  
foreach($catArray as $value){
  echo 
  '<li class="displaybox">
    <div class="tile">
      <div class="text-center category-drop">
        <a href="category.php?cat=' . $value . '">
          <img src="https://via.placeholder.com/210" alt="' . $value . '" class="center resize">
          <p>' . $value . '</p>
        </a>
      </div>
    </div>
  </li>';
}

if(empty($productArray[$key]['taxonomy_path'][4])){
echo 
'<li class="displaybox">
  <div class="tile">
    <div class="text-center category-drop">
      <a href="others.php">
        <img src="https://via.placeholder.com/210" alt="test category" class="center resize">
        <p>Others</p>
      </a>
    </div>
  </div>
</li>';
}
?>