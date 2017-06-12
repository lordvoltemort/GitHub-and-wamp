<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		$(function() { // equivalent of "$(document).ready(function(){"
    $('body').on('submit', '#form1', function(event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type : 'POST',
            url : 'file_product.php',
            data : formData,
            success : function(data) {
                $('#p').text(data);
            }
        });
    });
});
	</script>	
</head>
<body>

	<form action="#" method="POST" id="form1">
    <input type="hidden" name="tab1" value="<?= $tab1 ?>" />
    <input type="hidden" name="t2" value="<?= $t2 ?>" />
    <button type="submit">Click to Release</button>

</form>
</body>
</html>

