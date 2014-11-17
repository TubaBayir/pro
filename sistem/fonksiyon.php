<?php
	
	require_once "sistem/ayar.php";
	echo "asdasdasdas";

	if ($ayar["site_durum"] == 1) {
		//site açık
		require(TEMA."/index.php");
	}else {
		//site kapalı
	}

?>
