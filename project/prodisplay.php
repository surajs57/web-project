<?php
require 'dbconfig/config.php';

?>

<html>
<head>
<title>
Project Details
</title>

      

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table>
	
		<tr>
			<td>Project ID</td>
			<td>Name</td>
			<td>About</td>
			<td>Category</td>
			<td>Location</td>
            <td>Ratings</td>
			<td>Start Date</td>
			<td>Status</td>
			<td>Action</td>

			</tr>
	
		
	<?php
	$query="CALL pdisplay()";
		$query1="SELECT * FROM project_details";
	$query_run=mysqli_query($con,$query1);
	// $t = array();
	// $t = mysqli_fetch_assoc($query_run);
	// echo $t['pid'];
	while($row=mysqli_fetch_assoc($query_run)){
	
		echo "<tr>";
		echo "<td>".$row['pid']."</td>";
		echo "<td>".$row['pname']."</td>";
		echo "<td>".$row['pdesc']."</td>";
		echo "<td>".$row['pcat']."</td>";
		echo "<td>".$row['ploc']."</td>";
		echo "<td>".$row['prating']."</td>";
		echo "<td>".$row['start_date']."</td>";
		echo "<td>".$row['status']."</td>";
		
        echo "<td><u><a href='update.php?p= ".$row['pid']." '>Update</a></u></td>";
        echo "</tr>";
	}
	?>
	</table>
	
	
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="/materialize/js/materialize.min.js"></script>

</body>
</html>