 <?php
 	$fh = fopen('./msg.txt', 'r');

	$i = 1;
 	while (($row = fgetcsv($fh)) != false) {
 		//if ($i == $tid)
 			//print_r($row);
 			echo '<li><a href="readmessg.php?tid=', $i, '">', $row[0],  '</a>','</li>';
			$i += 1;
 	}

 ?>
