<?php
	$flags = 1;

	while ($flags <= 100) {

	if ($flags % 15 == 0)
		echo 'abcde','<br/>';
	elseif ($flags % 3 == 0) {
		echo 'Fizz','<br/>';
	}
	elseif ($flags % 5 == 0) {
		echo 'Buzz','<br/>';
	}
	else
		echo $flags,'<br/>';

		$flags += 1;

	}


?>
