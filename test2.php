<?php
$con=mysqli_connect("localhost","root","Agoiano1","login");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


        $qry = "Select * from member2 where company='485758484'";

        $result = mysqli_query($qry,$this->connection);
        
        if(!$result || mysqli_num_rows($result) <= 0)
        {
            echo" no rows";
        }
        
        
        return "pass";

mysqli_close($con);
?>