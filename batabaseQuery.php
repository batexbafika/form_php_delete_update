<?php

function student_list($rows){

    echo "<h1 class='text-center'>"."Students_Data"."</h1>";

    echo "<table class='table table-bordered '>";
        echo "<thead class='text-center fs-4'>"; 
        echo     "<tr>";
        echo        "<th>"."ID"."</th>";
        echo        "<th>"."Full_Name"."</th>";
        echo        "<th>"."Email"."</th>";
        echo        "<th>"."Phone_Number"."</th>";
        echo        "<th>"."Password"."</th>";
        echo        "<th>"."Action"."</th>";
        echo "</thead>";

        foreach($rows as $row){
        echo "<tbody class='text-center'>";
                echo     "<tr>";
                echo        "<td>".$row['id']."</td>";
                echo        "<td>".$row['full_name']."</td>";
                echo        "<td>".$row['email']."</td>";
                echo        "<td>".$row['phone']."</td>";
                echo        "<td>".$row['password']."</td>";
                echo  "<td>"."<a href=Update.php?id=".$row['id']." class='btn btn-primary'>Update</a>"."  ";
                echo   "<a href=Delete.php?id=".$row['id']." class='btn btn-danger'>Delete</a>";
                echo "</td>";
                
        echo "</tbody>";
        }
}

include "connection.php";
$sql = "SELECT * FROM students";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){
    $rows = array();
    while($row=mysqli_fetch_assoc($result)){
         $rows[] = $row;
    }
   
}
else{
       echo "0 results"; 
}

?>