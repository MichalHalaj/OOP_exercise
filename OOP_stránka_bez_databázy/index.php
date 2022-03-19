<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Články, ktoré menia svet</title>
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">Po prečítaní všetkých našich článkov zmeníte pohľad na váš doterajší život. </h1>
	</div>

	<?php

		require_once 'inc/Adventure.php';
		require_once 'inc/Clanok.php';

		$adventure = new Adventure();

		$adventure->addClanok(
			new Clanok ('Pštrosie vajcia', 'Americkí vedci zistili že, pštrosie vajcia sú tiež len vajcia.', 4)
		);

		$adventure->addClanok(
			new Clanok ('Fakty o vašom tele', "Je vedecký dokázane, že po prijatí dostatočného množstva tekutín, už nebudete viac smädní.", 23)
		);
	?>

	<div class="row">
	<?php

		foreach ( $adventure->getClanok() as $clanok )
		{
			echo '<article>';
			echo '	<h4>'. $clanok->title .'</h4>';
			echo '	<p>'. $clanok->excerpt .'<p>';
			echo '</article>';
		}

	?>
	</div>

	<div class="row">
		<p>
			number of articles: <strong><?php echo $adventure->clanokCount() ?></strong><br>
			number of comments: <strong><?php echo $adventure->commentCount() ?></strong>
		</p>
	</div>

</body>
</html>