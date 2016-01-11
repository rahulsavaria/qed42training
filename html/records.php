<?php

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn)
    {
       die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "select * from user";
    $result=mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($result);

  echo "$num_rows Rows\n";


 ?>
<html>
<head>
 <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
 <link type="text/css" rel="stylesheet" href="../css/records.css">

  </head>
  <body>
    <div style="overflow-x:auto;">
     <table id="recordstable" cellspacing="0">

          <th class="sortable" onclick="sort_table(0);">UID</th>
          <th class="sortable" onclick="sort_table(1);">username</th>
          <th>password</th>
          <th class="sortable" onclick="sort_table(3);">email</th>
          <th>mobile</th>
           <tbody id="people">
      <?php
        while($row=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td >" .$row['u_id']."</td>";
          echo "<td>" .$row['u_name']."</td>";
          echo "<td>" .$row['u_password']."</td>";
          echo "<td>" .$row['u_email']."</td>";
          echo "<td>".$row['u_mobile']."</td>";
          echo "</tr>";
        }

      ?>
    </tbody>
</div>
      </table>
      <script type='text/javascript' src="../js/sort.js"></script>
  </body>
</html>
