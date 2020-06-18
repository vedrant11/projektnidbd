<?php  include('admin.inc.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD-ADMIN</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
    <?php $results = mysqli_query($db, "SELECT * FROM usres"); ?>

<table>
	<thead>
		<tr>
            <h3>POPIS LOGIRANIH KORISNIKA:</h3>
			<th>Name</th>
			<th>Address</th>
			<th>Password</th>
			<th>Type</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['uidUsers']; ?></td>
			<td><?php echo $row['emailUsers']; ?></td>
			<td><?php echo $row['pwdUsers']; ?></td>
			<td><?php echo $row['typeUsers']; ?></td>
		</tr>
    <?php } ?>
</table>
    <?php if (isset($_SESSION['message'])): ?>
	    <div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	    </div>
    <?php endif ?>
</body>
</html>