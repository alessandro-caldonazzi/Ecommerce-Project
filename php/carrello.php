<?php 
session_start();

if (isset($_POST["add_to_cart"]))
	{
	if (isset($_SESSION["carrello"]))
		{
		$item_array_id = array_column($_SESSION["carrello"], "item_id");
		if (!in_array($_GET["id"], $item_array_id))
			{
			$count = count($_SESSION["carrello"]);
			$item_array = array(
				'item_id' => $_GET["id"],
				'nome' => $_POST["hidden_name"],
				'prezzo' => $_POST["hidden_price"],
				'quantità' => $_POST["quantity"]
			);
			$_SESSION["carrello"][$count] = $item_array;
			}
		  
		}
	  else
		{
		$item_array = array(
			'item_id' => $_GET["id"],
			'nome' => $_POST["hidden_name"],
			'prezzo' => $_POST["hidden_price"],
			'quantità' => $_POST["quantity"]
		);
		$_SESSION["carrello"][0] = $item_array;
		}
	}

if (isset($_GET["azione"]))
	{
	if ($_GET["azione"] == "elimina")
		{
		foreach($_SESSION["carrello"] as $keys => $values)
			{
			if ($values["item_id"] == $_GET["id"])
				{
				unset($_SESSION["carrello"][$keys]);
				
				}
			}
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Carrello</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/style1.css">   <!-- altro file css legato solamente al carrello/dashboard/profilo diverso dal login -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color: #ccc">
	<header class="header clearfix">
		<img src="../images/logo.png" alt="logo" class="logo" />
		<ul class="menu">
			<li class="menu_item"><a href="dashboard.php">Home</a></li>
			<li class="menu_item"><a href="../html/profilo.html">Profilo</a></li>
			<li class="menu_item"><a href="carrello.php"><strong>Carrello</strong></a></li>
			<li class="menu_item"><a href="esci.php">Esci</a></li>


		</ul>


	</header>
	<div style="clear:both"></div>
			<br> 
			<h3>Dettaglio ordine</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="10%">Quantità</th>
						<th width="40%">Nome oggetto</th>
						<th width="20%">Prezzo</th>
						<th width="15%">Totale</th>
						<th width="5%">Azione</th>
					</tr>
					<?php
					if(!empty($_SESSION["carrello"]))
					{
						$totale = 0;
						foreach($_SESSION["carrello"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["quantità"]; ?></td>
						<td><?php echo $values["nome"]; ?></td>
						<td>$ <?php echo $values["prezzo"]; ?></td>
						<td>$ <?php echo number_format($values["quantità"] * $values["prezzo"], 2);?></td>
						<td><a class="button" href="carrello.php?azione=elimina&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Rimuovi</span></a></td>
					</tr>
					<?php
							$totale = $totale + ($values["quantità"] * $values["prezzo"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Totale</td>
						<td align="right">$ <?php echo number_format($totale, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
</body>
</html>