<?php
//Form already sent?
if (isset($_POST['add']))
    {
 
//If so, connect to database
$connection = mysql_connect("localhost","Rahul","Koqa313*@3"); 
if ( ! $connection ) 
die ("connection failed"); 
$link="testing"; 
mysql_select_db($link) or die ("no connection");
 
// Create variables
$name = $_POST['name'];
$title = $_POST['title'];
$comment = $_POST['comment'];
 
//Check if all the info is there and send it
if (isset($name) AND $name !="" && isset($title) AND $title !="" && isset($comment) AND $comment !="")
 {
mysql_query("INSERT INTO commentsection (name, title, comment)
VALUES ('$name', '$title', '$comment')");
 }
 
//Close connection
mysql_close($connection);
 
// Here you can echo a confirmation message, redirect somewhere or whatever
 
}
 
else {
//If the form has not been sent, show it to the user

 
//Connecting to database
$connection = @mysql_connect("localhost","Rahul","Koqa313*@3"); 
if ( ! $connection ) 
die ("connection failed"); 
$link="testing"; 
mysql_select_db($link) or die ("no connection");
 
echo "
<FORM method='post' action=\"Comment.php\">
<table>
<tr>
<td>
Name&nbsp;:&nbsp;
</td>
<td>
<INPUT type=text name=\"name\">
</td>
</tr>
<tr>
<td>
Title&nbsp;:&nbsp;
</td>
<td>
<INPUT type=text name=\"title\">
</td>
</tr>
<tr>
<td>
Comment&nbsp;:&nbsp;
</td>
<td>
<TEXTAREA cols=50 rows=15 name=\"comment\"></TEXTAREA>
</td>
</tr>
<tr>
<td>
<INPUT type='submit' name='add' value='Send'>
</td>
</tr>
</table>
</FORM>
";
}
