<?php

	if (isset($_POST['sub1'])) {
		echo "<pre>";
        echo 1212121;		
	}
 	/*echo "<pre>";
 	print_r($_REQUEST);
 	echo $_REQUEST['password'];*/
?>
       <form action="process.php" method="post">
		Uesername: <input type="text" name="uesername">
		Password: <input type="password" name="password">
		<input type="submit" value="save" name="sub1">
	</form>