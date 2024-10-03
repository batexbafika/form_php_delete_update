<?php
    $host = "localhost";
    $user= "root";
    $password = "";
    $db = "forms";
    
    $conn = new mysqli($host, $user, $password, $db);
    
    if($conn->connect_error){
        die("NOT Connected".$conn->connect_error);
    }
    else{
        echo "   ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid bbb pt-3">
          <div class="row justify-content-center margincenter">
              <div class="col-md-6">
                  <h2 class="text-center">Update_Record</h2>
        <form class="form" method="POST" action="">
            <div id="name">
                <label for="name">FullName:</label>
                <input type="text" name="fullname" placeholder="Enter FullName">
            </div><br>

            <div id="email">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Enter Email">
            </div><br>
            <div id="gender">
                <label for="phone">Phone:</label>
                <input type="number" name="phone" placeholder="Enter phone">
            </div><br>
            <div id="password">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Enter Password">
             </div><br>
             <input id="submit" class="btn btn-dark" type="submit" value="Update" name="Update"/>
        </form>
    </div>
</div>
</div>

<?php
 
  $id = $_GET['id'];

$select = "SELECT * FROM students WHERE id='$id'";
$result2 = mysqli_query($conn, $select);
$row=mysqli_fetch_assoc($result2);

if(isset($_POST['Update'])){
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    if(empty($name || $email || $phone || $password)){
        echo "field(s) can't be empty!";
    }
    else{

        $update = "UPDATE students SET full_Name='$name', email='$email', phone='$phone', password='$password'WHERE id='$id'";
        mysqli_query($conn, $update);
       
     header("Location:form.php");
      echo "<script>alert('One Record updated successfully!');</script>";
    }
   $conn->close();
}
else{
echo "  ";
}



    
 
?>
</body>
</html>