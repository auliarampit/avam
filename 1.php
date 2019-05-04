<?php

$data =  array(
		"name" 			=> "Aulia",
		"address" 		=> "Aceh",
		"hobbies"		=> array("berenang" , "sepak bola"  ),
		"is_married" => "false",
		"school" 		=> array("highSchool" => "SMK" ,
								 "university" => "Negeri 5 Telkom BNA" ),
		"skills"		=> array("Desaign Graphic", "Multimedia" )
		);
		
	function formatJson($data){
		return json_encode(	$data);
	}
	echo formatJson($data);

?>