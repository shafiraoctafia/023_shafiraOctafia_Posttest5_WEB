<?php

    require 'config.php';

    if(isset($_POST['submit'])){
        $Nama = $_POST['nama'];
        $No_Handphone = $_POST['NoHandphone'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];
        $Gender = $_POST['Gender'];

        $result = mysqli_query($db,
        "INSERT INTO Pengunjung (Nama, No_Handphone, Email, Pasword, Gender)
        VALUES ('$Nama', '$No_Handphone', '$Email', '$Password', '$Gender')");

        if($result){
            echo "
                <script>
                    alert('Data Berhasil Di Input');
                    document.location.href = 'hasilform.php';
                </script>
                ";
        }
    }
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
<body onload="popup()">
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
      <div class="content">
             <h1>FOOD RECOMENDATION</h1><br>
              <p>Wisata kuliner di Samarinda tidak akan puas rasanya jika hanya sehari.<br>
              Pasalnya, banyak makanan enak dan ngangenin banget. Tidak hanya mengenai rasa saja,<br>
              namun juga moment dan lokasi yang tidak seperti biasa.<br>
              Banyak nuansa tambahan yang membuat sajian terasa lebih enak dan lezat sehingga acara makan bisa lebih menyenangkan.<br>
              Bagi Anda yang sedang berada di kota ini, Silahkan kunjungi Wbsite ini untuk mengerahui Rekomendasi makanan apa saja sih yang enak-enak dan tentunya Harga merakyat.</p><br>
              <p> Jangan ragu dalam memecahkan masalah! <br>Kecuali kalau ada tulisannya
          , Memecahkan berarti membeli hehehehe :) </p>
      </div>
      <div>
      <div class="sec-content-form">
        <h2>Welcome <br>Halaman Login</h2>
        
        <form action="" method="post">
       <!-- form field di sini -->
       <table>
          <div class="formgrup1">
                <label>Nama :</label>
                <input type="text" name="nama" placeholder="Nama lengkap..." />
          </div>
          <div class="formgrup1">
                <label>No.Handphone:</label>
                <input type="number" name="NoHandphone" placeholder="No.Handphone..." />
          </div>
          <div class="formgrup1">
                <label>Email:</label>
                <input type="email" name="email" placeholder="Email..." />
          </div>
          <div class="formgrup1">
                <label>Password:</label>
                <input type="password" name="password" placeholder="Password..." />
          </div>
          <div class="formgrup">
                <label>Gender:</label>
                <label><input type="radio" name="Gender" value="laki-laki" /> Laki-laki</label>
                <label><input type="radio" name="Gender" value="perempuan" /> Perempuan</label>
          </div>
          <div class="formgrup">
            <input type="submit" name="submit" class="submit" value="Submit" />
          </div>
       </table>
       </form>
       </div>
      </div>
    <div class="footer">
      Copyright &copy; 2022 Designed by Shafira Octafia
    </div> 
  </div> 
  <script src="js.js"></script>
  <script src="dist/sweetalert2.all.min.js"></script>
</body>
</html>