function functionCall() {
  alert();
}

/***************************************************************************************************************
 * Here first of get the image if from displayImageWithButton function and store the value of that particular
 * image id in a javascript variable and call another function which is update the bikes table with the following
 * data (userid,bikeid, startdate and enddate)
 **************************************************************************************************************/
	function passImageId(intvalue,startdate,enddate) {
		var xhttp;
		var val = intvalue;
    // var sdate = startdate;
    // var edate = enddate;
		// console.log("val is : " ,intvalue);
    // console.log("start date is : " ,startdate);
    // console.log("end date is : " ,enddate);
    // var dataObj = new Object();
    // dataObj.imageid = val;
    // dataObj.fdate = sdate;
    // dataObj.ldate = edate;
    // console.log("selected data is : ",dataObj);

		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };//$url = "http://localhost/main.php?email=" . $email_address . "&eventid=" . $event_id;
        xmlhttp.open("GET"
        ,"http://localhost/GITHUB/GitHub-and-wamp/bootstrap-datetimepicker-master/sample in bootstrap v3/getuser.php?q="+ intvalue
        ,true);
        xmlhttp.send();

}
