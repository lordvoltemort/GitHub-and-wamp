<form action="Button.php" method="post">
    <input type="submit" name="someAction" value="GO" />
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        func();
    }
    function func()
    {
        echo "give me something";
    }
?>