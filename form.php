
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
                  <h2 class="text-center">Student Info</h2>
        <form class="form" method="POST" action="connection.php">
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
             <input id="submit" class="btn btn-dark" type="submit" name="submit"/>
        </form>
    </div>
</div>
</div>
<hr>

<?php

include "batabaseQuery.php";
student_list($rows);
?>
</body>
</html>