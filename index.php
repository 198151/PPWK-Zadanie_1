<?php
	if(isset($_GET)) {
		$test = key($_GET);
		echo strrev($_GET[$test]);
	}
?>
