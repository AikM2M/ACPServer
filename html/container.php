<?php
	include('connMiddleNode.php'); // Open DB
    $sql =<<<EOF
      SELECT * FROM container;
EOF;

   $ret = $db->query($sql);
	if(!$ret)
      echo "<br /><hr /> &nbsp " . $db->lastErrorMsg();
?>

<!DOCTYPE html>
<html>
<head>
	<title>OneM2M ACP Management</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:100%;">
	<span style="font-size:25px; color:blue"><center><strong>The OneM2M ACP Management Module</strong></center></span>	
		
		<span class="pull-right"><a href="/.." data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-home"></span> Back to Home Page</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Sr.</th>
				<th>rn (ResID)</th>
				<th>_to</th>
				<th>rqi</th>
				<th>ct</th>
				<th>lt</th>
			</thead>
			<tbody>
			<?php
			$icounter = 0;
			   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
				   $icounter++;
					?>
					<tr>
						<td><?php echo $icounter;   ?></td>
						<td><?php echo $row['rn'];   ?></td>
						<td><?php echo $row['_to'];   ?></td>
						<td><?php echo $row['rqi'];   ?></td>
						<td><?php echo $row['ct'];   ?></td>
						<td><?php echo $row['lt'];		?></td>
					</tr>
					
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php	include('add_modal.php'); ?>
</div>
</body>
</html>