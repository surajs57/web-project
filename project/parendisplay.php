<?php
require 'dbconfig/config.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>
Project Details
</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
</head>
<body>


	

<table class="responsive-table striped">
	<thead>
		<tr>
			<td>Project ID</td>
			<td>FOUNDER ID</td>
			<td>PARENT COMPANY</td>
			<td>CATEGORY</td>
			<td>LOCATION</td>
			<td>FOUNDERS</td>
			<td>PORTFOLIOS</td>
			<td>Action</td>

			
			
		</tr>
	</thead>
		
	<?php
	$query="SELECT * FROM PARENT_COMPANY";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	while($row=mysqli_fetch_assoc($query_run)){
		echo "<tr>";
		 echo "<td>".$row['pid']."</td>";
		echo "<td>".$row['fid']."</td>";
		echo "<td>".$row['paren_com']."</td>";
		echo "<td>".$row['paren_cat']."</td>";
	    echo "<td>".$row['paren_location']."</td>";
	 	echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['fportfolio']."</td>";
        echo "<td><u><a href='updateparent.php?paren=".$row['pid']."'>Update</a></u></td>";
        echo "</tr>";
	}
	?>
	</table>
	
	
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="/materialize/js/materialize.min.js"></script>











</body>
</html>