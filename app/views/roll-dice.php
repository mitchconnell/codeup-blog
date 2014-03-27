<!doctype html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h1>roll = <?php echo $random; ?></h1>
    <h1>guess = <?php echo $guess; ?></h1>
    <?php if ($guess == $random) : ?>
    	<h1>got it</h1>
    <?php else : ?>
    	<h1>fail</h1>
    <?php endif; ?>
</body>
</html>
  