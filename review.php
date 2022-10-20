<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM report";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head><style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 66px;
  text-decoration: none;
}

.pagination a.active {
  background-color: maroon;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
</style>
      <title>View complaints Page</title>
       <!-- to make it looking good im using bootstrap -->
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

      <div class="container">
            <h2>Complaints made</h2>
            <h4>Names of individuals who registered complaints are not visible so as to protect them.</h4>

<table class="table">
  <thead class="thead-dark">
            <tr>
            <th>Crime</th>
            <th>County</th>
            <th>Location of crime</th>
            <th>Date of Crime</th>
            <th>Time of Crime</th>
            <th>More information about the crime</th>
            

      </tr>
      </thead>
      <tbody>     
            <?php
                  if ($result->num_rows > 0) {
                        //output data of each row
                        while ($row = $result->fetch_assoc()) {
            ?>

                              <tr>
                              <td><?php echo $row['crime']; ?></td>
                              <td><?php echo $row['county']; ?></td>
                              <td><?php echo $row['location']; ?></td>
                              <td><?php echo $row['date']; ?></td>
                              <td><?php echo $row['time']; ?></td>
                              <td><?php echo $row['info']; ?></td>
                              
                              
                              </tr> 
                              
            <?php       }
                  }
            ?>
                  
      </tbody>
</table>
      </div>

</body>
</html>