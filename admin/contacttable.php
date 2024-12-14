<?php
include("../connection.php");


$selecting=mysqli_query($conn,"SELECT * FROM contactme");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire me table</title>
    <link rel="stylesheet" href="contacttable.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/all.css">
</head>
<body>
    <div class="container">
    <div class="sidebar"><br><br>
        <h1>Dashboard</h1><br><br><br><br>
        <nav>
            <ul>
                <li>
                  
                  <a href="admin.html" ><i class="fas fa-home"></i>Home</a></li><br><br>

                <li><a href="#contacttable.html"><i class="fa-regular fa-address-book"></i></i>Contact Me</a></li><br><br>

                <li><a href="hiremetable.html" id="active"><i class="fas fa-home"></i>Hire Me</a></li><br><br>

                <li><a href="#setting"><i class="fa-solid fa-gear"></i></i>Setting</a></li><br><br>

                <li><a href="#help"><i class="fas fa-question"></i>Help</a></li><br><br>
                

            </ul>
        </nav>

    </div>
  <div class="body">
    <div class="hiremetable">
        <table border="1">
            <thead class="table-head">
                <th class="table-titles">ID</th>
                <th>Full Name</th>
                <th>Email</th>
            

            </thead>
            <tbody>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              
            </tbody>
        </table>
    </div>
</div>
</div>
</body>
</html>