//start of homepage
//get date and time
var x;
var y;
/*function Avablity() {
			//document.write('Done');
			x = document.getElementById('cal1').value;
			y = document.getElementById('cal2').value;
			//document.getElementById('temp').innerHTML = "Here value should display";
			if (x != "" && y != "" ) {
				document.getElementById('temp').innerHTML = "The value of x is " + x + " and value of y is " + y;
			}
			else{
				document.getElementById('temp').innerHTML = "You have to fill both start and  end date";
			}
	}
*/
	function checkRegistration(){
     	var form_valid = (document.getElementById('date1').value != "");
     	if(!form_valid){
 	        alert('Given data is incorrect');
 	        return false;
 	    }
 	    return true;
 }
//end of honepage

//start of adventure

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function ChangeAventureImage1() {
		document.getElementById('ChangeAdventureImage').src = 'IMAGES/shillong(1).jpg';
	}
function ChangeAventureImage2() {
		document.getElementById('ChangeAdventureImage').src = 'IMAGES/guwahati.jpg';
	}

function ChangeAventureImage3() {
  		document.getElementById('ChangeAdventureImage').src = 'IMAGES/kaziranga-tourism-banner1.gif';
  	}

function ChangeAventureImage4() {
      		document.getElementById('ChangeAdventureImage').src = 'IMAGES/Tawang-71.jpg';
      	}

//end of adventure

//start of full screen

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
    document.getElementById('id01').style.display='block' ;
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

//ebd of full screen

//start of image

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}

//end of images

//start of modal

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
function openModal() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//end of modal

//start of offer model

/* Open the sidenav */
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

/* Close/hide the sidenav */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

//end of offer modal
