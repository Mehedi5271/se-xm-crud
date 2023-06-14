<?php

	$id = $_GET["id"];
	$section = $_GET["section"];

?>

<h1>Update Section</h1>

<form method=get action=update_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	section: <input type=text name=section value='<?php echo $section; ?>'>

	<p>

	

	<input type=submit value=Update>

</form>