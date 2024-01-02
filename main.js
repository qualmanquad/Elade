
// Cyling through photo gallery 1
let index = 0;
displayImages();
function displayImages() {
  let i;
  const images = document.getElementsByClassName("image1");
  for (i = 0; i < images.length; i++) {
    images[i].style.display = "none";
  }
  index++;
  if (index > images.length) {
    index = 1;
  }
  images[index-1].style.display = "block";
  setTimeout(displayImages, 20000); 
}

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("navbar");
  var y = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
    y.className += " responsive";

  } else {
    x.className = "navbar";
    y.className = "container topnav";
  }
  }


