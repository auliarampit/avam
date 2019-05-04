<?php

 function ValidasiUsername($user){
 	$lowercase = preg_match("/^[a-z]*$/", $user);

 	if ($lowercase && strlen($user)==8) {
 		echo "true <br/>";
 	}else{
 		echo "false <br/>";
 	}
 }

  function ValidasiPassword($pass){
 	$bebas = preg_match("/^[a-z || A-Z || 0-9 || @_.=,|+()*&^%$#!'\/-]*$/", $pass);

 	if ($bebas && strlen($pass)==8) {
 		echo "true <br/>";
 	}else{
 		echo "false <br/>";
 	}
 }

 ValidasiUsername("auliarah");
 ValidasiPassword("auliaR_A")

?>