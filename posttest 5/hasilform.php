<?php
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM Pengunjung");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>DFood Recommendations</title>
</head>
<body>
  <div class="main">
    <div class="navbar">
      <div class="header-logo"> 
        Food Recommendations 
      </div>
      <div class="nav-sub">
        <ul class="header-nav">
          <li><a class="menu" href="#" title="User">User</a></li>
          <li><a class="menu" href="index.php" title="Home">Home</a></li>
          <li><a class="menu" href="about.html" title="AboutMe">AboutMe</a></li>
          <li><a class="menu" href="#" title="Contact">Contact</a></li>
        </ul>
        <ul class="mode">
          <button class="dark" onclick="modedark()" >Dark Mode</button>
          <button class="light" onclick="modedark()" >Light Mode</button>
        </ul>
      </div>
    </div>
    
    <div class="hasil">
      <h1> Data Pengunjung </h1>
      <table border="1">
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>No.Handphone</th>
              <th>Email</th>
              <th>Password</th>
              <th>Gender</th>
              <th colspan='2'>action</th>
          </tr>
          <?php
              $i=1;
              while($row = mysqli_fetch_array($result)){
          ?>
          <tr>
              <td><?=$i;?></td>
              <td><?=$row['Nama']?></td>
              <td><?=$row['No_Handphone']?></td>
              <td><?=$row['Email']?></td>
              <td><?=$row['Pasword']?></td>
              <td><?=$row['Gender']?></td>
              <td><a href="edit.php?id=<?=$row['id']?>">edit</a></td>
              <td><a href="hapus.php?id=<?=$row['id']?>">hapus</a></td>
          </tr>
          <?php
              $i++;
              }
          ?>
      </table>
    </div>
  </div> 
  <script src="js.js"></script>
  <script src="dist/sweetalert2.all.min.js"></script>
</body>
</html>