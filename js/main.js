$( document ).ready(function(){

    $(".button-collapse").sideNav();
  });


  var mySlider = 0;
carousel();


function carousel() {
    var i;
    var x = document.getElementsByClassName("Slide");
    var y= document.getElementsByClassName("text");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
       y[i].style.display= "none";
    }

    mySlider++;

    if (mySlider+1 > x.length) {
      mySlider = 0
    }

    x[mySlider].style.display = "block";
    y[mySlider].style.display="block";

    setTimeout(carousel, 2000);
}
