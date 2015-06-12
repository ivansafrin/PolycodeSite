<?php
	require_once("../site/header.php");
	require_once("learn_header.php");

	if(isset($_GET["article"])) {
		$article = $_GET["article"];
	} else {
		$article = "intro";
	}

	$fileName = "content/$article.html";
	if(file_exists($fileName)) {
		echo file_get_contents($fileName);
	}


	require_once("learn_footer.php");
	require_once("../site/footer.php");
?>
