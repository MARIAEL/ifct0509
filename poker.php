<?php include '_header.php' ?>

	<?php

		$carta1 = "carta_dorso.png";
		$carta2 = "carta_dorso.png"; 
		
		$cartas = ["As","2","3","4","5","6","7","8","9","10","J","Q","K"];
		$palos = ["picas","tréboles","diamantes","corazones"];

		if (isset($_POST["go"])) {
			# code...
		$c1 = rand(1,13);
		$p1 = rand(1,4);

		$c2 = rand(1,13);
		$p2 = rand(1,4);


		$carta1 = "carta_" . $c1 . "_" . $p1 .".png";
		$carta2 = "carta_" . $c2 . "_" . $p2 .".png";

		}

	 ?>

<div class="row">
	<div class="col-xs-6">
		<div class="well">POKER</div> 
	</div>
</div>

	<form action="poker.php" method="post">
		
		<div class="row">
			<div class="col-xs-6">
				<div class="well"><h2>CARTA 1</h2>
				</div> 
				<img src="img/<?php echo $carta1; ?>">
			</div>
			<div class="col-xs-6">
				<div class="well"><h2>CARTA 2</h2>
				</div> 
				<img src="img/<?php echo $carta2; ?>">
			</div>
		</div>
		
		

		<br>			

		<input type="submit" name="go" value="GO" class="btn btn-warning"/> 
	
	</form>

		
		




<?php include '_footer.php' ?>