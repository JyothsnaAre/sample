 <?php
 
  mysql_connect("localhost","root","");
  mysql_select_db("hnidb");

  if(isset($_POST['sub'] ) )
    {
        $r = $_POST['branch'];
        $n = $_POST['t2'];
        $m = $_POST['t3'];
    }

?> 


<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    PA Security - HOME
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  
  
  <link href="./assets/css/bootstrap-select.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />

</head>

<body>

  <table>
    <tr style="width: auto;">
      <th style="width: auto;">
    <span>Name</span>
    </th>
    <th>
    <center><span>Date</span></center>
    </th>
  <th>
    <center><span>Time</span></center>
  </th>
  <th>
    <center><span>Status</span></center>
  </th>
</tr>
<tr>
  <?php

  $data = mysql_query("select  from details");
  echo "<table border=1>";
  echo "<tr><th> roll no. </th><th> name </th><th> mobile </th></tr>";
  while($row = mysql_fetch_row($data) )
  {
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
  }
  echo "</table>";

  ?>
  <center><td>Name</td>
  <td>Sample date</td>
  <td>Sample Time</td>
  <td>Sample Status</td></center>
  <td>
    <div class="col-md-6 ml-auto">
    <a href="a"><span class="badge badge-pill badge-info">Confirm</span> </a>
    </div>
  </td>
  <td>
    <div class="col-md-6 ml-auto">
    <a href="a"><span class="badge badge-pill badge-info">Cancel</span>  </a>
    </div>
  </td>
  <td>
    <div class="col-md-6 ml-auto">
    <a href="a"><span class="badge badge-pill badge-info">Reschedule</span></a>
    </div>
  </td>
</tr>
  </table>


</body>