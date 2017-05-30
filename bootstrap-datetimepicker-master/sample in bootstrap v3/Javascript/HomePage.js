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
