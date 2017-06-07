<form method="post" action=""<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="submit" class="button" name="insert" value="insert" />
    <input type="submit" class="button" name="select" value="select" />
</form>
<?php
/*
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            insert();
            break;
        case 'select':
            select();
            break;
    }
}
*/

    if($_POST){
        if(isset($_POST[''])){ 
            ClickAButton();
        }
        elseif(isset($_POST['insert'])){
            insert();
        }elseif(isset($_POST['select'])){
        select();
    }else{
        
    }
}

    function select(    )
    {
       echo "The select function is called.";
    }
    function insert()
    {
       echo "The insert function is called.";
    }
    function ClickAButton()
    {
        echo "Click another butt";
    }

?>