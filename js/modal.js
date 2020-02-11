var modal = [0];
var link = [0];
var span = [0];

for (var i = 0; i < 10; i++){
  modal[i] = document.getElementById("myModal"+ i.toString());
  link[i] = document.getElementById("myLink" + i.toString());
  
  var currentIndex = i;
  
  link[i].onclick = function(){
    modal[currentIndex].style.flex;
  }

  span[i] = document.getElementsByClassName("close");

  span[i].onclick = function() { 
    modal[currentIndex].style.display = "none";
  }
}

  



