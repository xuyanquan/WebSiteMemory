<?php

	interface OP {
		public function EditHost();
		public function RunSublime();
	}

	class OPImpl implements OP {
		function EditHost() {}
		function RunSublime() {}
	}


	$openterty = new OPImpl();

	// $_POST[]
	// header("Content-type: text/json; charset=utf-8");
	// echo json_encode(value);
	echo "Hello"
	
?>