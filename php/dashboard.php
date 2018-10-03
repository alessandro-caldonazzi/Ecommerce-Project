
<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "test");
session_start();


if ($_SESSION['login'] != "si")
	{
	echo "verrai renderizzato tra 1 secondo";
	sleep(1);
	header("location: ../html/login.html");
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>
	<header class="header clearfix">
		<img src="../images/logo.png" alt="logo" class="logo" />
		<ul class="menu">
			<li class="menu_item"><a href="dashboard.php"><strong>Home</strong></a></li>
			<li class="menu_item"><a href="../html/profilo.html">Profilo</a></li>
			<li class="menu_item"><a href="carrello.php">Carrello</a></li>
			<li class="menu_item"><a href="esci.php">Esci</a></li>
			
			


		</ul>


	</header>
	<div class="container">
			<br>
			<br>
			<br>
			<br>
			<?php
				$query = "SELECT * FROM prodotti ORDER BY id ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="carrello.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; margin-bottom: 16px; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="../images/<?php echo $row["immagine"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["nome"]; ?></h4>

						<h4 class="text-danger">€ <?php echo $row["prezzo"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["nome"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["prezzo"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Aggiungi al carrello" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			
		</div>

</body>
</html>