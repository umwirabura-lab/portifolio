<?php
include("../connection.php");
// include("hiremetable.html");

$selecting=mysqli_query($conn,"SELECT * FROM hireme");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire me table</title>
    <link rel="stylesheet" href="hiremetable.css">
     <link rel="stylesheet" href="hiringtable.css">
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

                <li><a href="#contact"><i class="fa-regular fa-address-book"></i></i>Contact Me</a></li><br><br>

                <li><a href="hiremetable.html" id="active"><i class="fas fa-home"></i>Hire Me</a></li><br><br>

                <li><a href="#setting"><i class="fa-solid fa-gear"></i></i>Setting</a></li><br><br>

                <li><a href="#help"><i class="fas fa-question"></i>Help</a></li><br><br>
                

            </ul>
        </nav>

    </div>
  <div class="body">
    <div class="hiremetable">
        <table border="1">
            <thead>
                <th class="table-title">ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Project Title</th>
                <th>Project description</th>
                <th>Design</th>
                <th>Link</th>
                <th>Project to start</th>
                <th>Project Deadline</th>
                <th>Project flexible</th>
                <th>budget</th>
                <th>Payment Method</th>
                <th>Additional information</th>
                <th>meeting</th>
            
            </thead>
        <?php

    while($fetch=mysqli_fetch_array($selecting)){
?>
        
            <tbody>
                <td><?php echo $fetch['ID'];?></td>
                <td><?php echo $fetch['Full name'];?></td>
                <td><?php echo $fetch['Email'];?></td>
                <td><?php echo $fetch['Phone number'];?></td>
                <td><?php echo $fetch['Project Title'];?></td>
                <td><?php echo $fetch['Project description'];?></td>
                <td><?php echo $fetch['Design'];?></td>
                <td><?php echo $fetch['Link'];?></td>
                <td><?php echo $fetch['Project to start'];?></td>
                <td><?php echo $fetch['Project Deadline'];?></td>
                <td><?php echo $fetch['Timeline flexible'];?></td>
                <td><?php echo $fetch['Budget'];?></td>
                <td><?php echo $fetch['Payment Method'];?></td>
                <td><?php echo $fetch['Additional information'];?></td>
                <td><?php echo $fetch['Meeting'];?></td>
            </tbody>
            <?php
    }
            ?>
        </table>

    </div>
</div>
</div>
</body>
</html>