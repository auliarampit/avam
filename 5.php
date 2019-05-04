<?php

function cetak($numb){

	$i = 1;
	while ($i <=$numb) {
			echo substr(str_shuffle(md5(microtime())), 0, 32);
			echo "<br/>";

			$i++;
	}
}

cetak(3);

?>