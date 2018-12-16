<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>

  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <link href="./assets/css/bootstrap-select.css" rel="stylesheet" />
  
  
  
</head>
<body>

		<div class="table-responsive">          
			<table class="table">
				<thead>
					<tr>
						<th>S.No</th>
						<th>Subject</th>
						<th>Applied_on</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$sno=1;
				$conn = new mysqli('localhost','root','','hnidb');
				$sql = "SELECT subject,date,status FROM m_appoint_table where mid=1";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
    
					while($row = $result->fetch_assoc()) {
						echo "<tr>" ;	

						
						echo "<td>".$sno."</td>";
						$sno++;
						echo "<a href='letter_view.php?subjectname=".urlencode($row['subject'])."'>'<td>".$row['subject']."</td></a>";
//>>>>>>> 8262614e008bd982068e21f6f605c9f41d16d553
						echo "<td>".$row["date"]."</td>";
						echo "<td>".$row["status"]."</td>";
						
						echo "</tr>";
					}
				} 
				else {
					echo "0 results";
				}
				$conn->close();
				?>
				
				
				</tbody>
			</table>
		</div>
		
		
	


<!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="./assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>
  <script src="./assets/js/bootstrap-select.js" type="text/javascript"></script>

</body>
</html>