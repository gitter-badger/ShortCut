<?php
	if (isset($_GET['result'])):?>
		<input type="text" value="<?= $_GET['result'] ?>" readonly>
		<input type="button" value="Return to home">
		<?php
	elseif (isset($_GET['err'])):?>
		<input type="text" value="Please enter a valid URL ." style="color: #f00;" readonly>
		<input type="button" value="Return to home">
	<?php else: ?>
		<form action="process.php" method="get">
			<input type="text" name="url" placeholder="Insert your URL">
			<input type="submit" value="Get short URL">
		</form>
	<?php endif; ?>