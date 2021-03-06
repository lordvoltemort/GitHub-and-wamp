 <!-- Css link for date and time -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<!--end of css link for date and time -->


<?php 
require 'core.inc.php';
require 'connect.inc.php';
if(loggedin())
{
	$firstname = getuserfield('username');
	$surname = getuserfield('surname');
	echo 'You\'re logged in, '.$firstname.' '.$surname.'.<br/>';
	echo '<a href="logout.php"><button>Logout</button></a>';
//     header("Location: BookingPage.php");

    echo "<div>";
            echo '<img id="imgBanner" src="" alt="" />';
    echo "</div>";
    
echo "   <!-- Start of date and time box -->";
echo '<div class="DateAndTime">';
    echo '<div class="container">';
        echo '<form onsubmit="return checkDate()" method="get" action="loginform.inc.php" class="form-horizontal"  role="form">';
            echo '<fieldset>';
                echo '<div class="form-group">';
                    echo '<label for="dtp_input1" class="col-md-2 control-label">Start Date and time</label>';
                    echo '<div class="input-group date form_datetime col-md-5" data-date="2017-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1" >';
                        echo '<input class="form-control" name="Start_trip" size="16" id="startDate" type="text" value="" readonly >';
                        echo '<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>';
                        echo '<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    </div>';
                    echo '<input type="hidden" id="dtp_input1" value="" /><br/>
                </div>';

                echo '<div class="form-group">';
                    echo '<label for="dtp_input1" class="col-md-2 control-label">End Date and time</label>';
                    echo '<div class="input-group date form_datetime col-md-5" data-date="2017-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">';
                        echo '<input class="form-control" name="end_trip" id="endDate" size="16" type="text" value="" readonly>';
                        echo '<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>';
                        echo '<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    </div>';
                    echo '<input type="hidden" id="dtp_input1" value="" /><br/>';
                echo '</div>';
            
            echo '</fieldset>';
             echo '<input type="submit" value="search" >';
            
        echo '</form>';
    echo '</div>';
echo '</div>';  
    
echo "<!-- End of date and time-->";


    
}
else
{
	include 'loginform.inc.php';
}	
?>

	<div  id="offers">
	<form action="Homepage.php" method="post">
		<p style="float: right; margin-top: 1px;"> <?php //echo "$firstname  $surname" ?></p>
		<span style="float: right; padding-top: 30px; margin-top: 1px;">

		</span>
	</form>
	</div>

  <script type="text/javascript">
        function checkDate(){   
        var startDate = (document.getElementById('startDate').value != "");
        var endDate = (document.getElementById('endDate').value != "");
        if(!startDate || !endDate){
            alert('Please provide date and time');
            return false;
        }
        return true;
}       
    </script>


<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
