<?php

	echo "Segitiga Sebelah Kiri";

	for ($x = 5; $x > 0; $x--){

	echo '';

	for($y = $x; $y < 6; $y++){

	echo '*';

	}

	echo '<br/>';

	}



	echo 'Segitiga Sebelah Kanan<br/>';

	for ($i=1; $i <=5 ; $i++) {

	for ($j=4; $j>=$i ; $j--) {

	echo "&nbsp;&nbsp;";

	}

	for ($k=1; $k <=$i ; $k++) {

	echo "*";

	}

	echo "<br>";

	}

	echo 'Segitiga Tengah<br/>';

	for ($i = 0; $i < 5; $i++) {

	for ($j = 5; $j > $i; $j--) {

	echo '&nbsp;';

	}

	for ($k = 0; $k <= $i; $k++) {

	echo '*';

	}

	echo '<br/>';

}

?>
