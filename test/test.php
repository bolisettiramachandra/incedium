<?php
if(isset($_GET['submit'])){

	$editor1 = $_GET['editor1'];
	
	echo $editor1;
}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CKEditor</title>
		<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
	</head>
	<body>
		<form action="test.php" method='GET'>
		<textarea name="editor1"></textarea>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script>
		<input type="submit" name="submit" value="submit">

		</form>
	</body>
</html>