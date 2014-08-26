<?php 
   $result=$fgmembersite->DisplayAccess();
   while($row = mysqli_fetch_array($result)) {
     echo $row['username'] . " " . $row['phone_number'];
     echo "<br>";
   }
?>