
<?php

$host = "localhost";
$user= "root";
$password = "";
$db = "forms";

$con = new mysqli($host, $user, $password, $db);

if($con->connect_error){
    die("NOT Connected".$con->connect_error);
}
else{
    echo "   ";
}

// $crt = "CREATE TABLE students(
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     full_name VARCHAR(100),
//      email VARCHAR(80),
//      phone VARCHAR(25),
//      password VARCHAR(100)
//     )";
//     mysqli_query($con, $crt);


    if(isset($_POST['submit'])){
             $name = $_POST["fullname"];
             $email = $_POST["email"];
             $phone = $_POST["phone"];
             $password = $_POST["password"];

             if(empty($name || $email || $phone || $password)){
                 echo "field(s) can't be empty!";
             }
             else{

                 $stmt = $con->prepare("INSERT INTO students(full_name, email, phone, password)VALUES(?,?,?,?)");
                 $stmt->bind_param("ssss", $name, $email, $phone, $password);
                 $stmt->execute();
                 header("Location:form.php");
                
             }
             $con->close();
    }
    else{
        echo "  ";
    }


?>