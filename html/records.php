<?php


   session_start();
   $user_id=$_SESSION['user_id'];
   //var_dump($_SESSION);

    include("../authentication.php");
    if($user_id == null){
      header("Location: http://localhost/qed42training/html/login.html");
    }
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn)
    {
       die("Connection failed: " . mysqli_connect_error());
    }
    $sql1="select u_name from user where u_id=".$user_id.";";

    $res1=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_row($res1);
    $userna=$row[0];

    $sql = "select * from user";

    $result=mysqli_query($conn,$sql);

    $num_rows = mysqli_num_rows($result);
    //var_dump($num_rows);


echo "<span style='font-weight:bold; font-size:16px;color:blue;'>hello ".$userna."</span>";
 ?>
<html>
<head>
 <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
 <link type="text/css" rel="stylesheet" href="../css/records.css">

  </head>
  <body>
    <div style="overflow-x:auto;">
      <form action ="logout.php" method="post">
        <input id="logout" type="submit" value="logout" >
      </form>
     <table id="recordstable" cellspacing="0">

          <th class="sortable" onclick="sort_table(0);">UID</th>
          <th class="sortable" onclick="sort_table(1);">Name</th>
           <th class="sortable" onclick="sort_table(2);">username</th>
          <th>password</th>
          <th class="sortable" onclick="sort_table(3);">email</th>
          <th>mobile</th>
           <tbody id="people">
      <?php
        while($row=mysqli_fetch_array($result))
        {
          echo "<tr>";
          echo "<td >" .$row['u_id']."</td>";
          echo "<td>" .$row['u_name']."</td>";
          echo "<td>" .$row['u_username']."</td>";
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
