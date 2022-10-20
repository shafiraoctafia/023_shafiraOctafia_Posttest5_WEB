<?php

    require 'config.php';
    
    // Menangkap id dari url yang dikirimkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Tampilkan value inputan dari id
    $result = mysqli_query($db, 
    "SELECT * FROM Pengunjung WHERE id='$id'");
    $row = mysqli_fetch_array($result);

    if(isset($_POST['submit'])){
        $Nama = $_POST['nama'];
        $No_Handphone = $_POST['NoHandphone'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];
        $Gender = $_POST['Gender'];

        $result = mysqli_query($db, 
        "UPDATE Pengunjung SET
        Nama='$Nama',
        No_Handphone='$No_Handphone',
        Email='$Email',
        Pasword='$Password',
        Gender='$Gender'
        WHERE id='$id'
        ");

        if($result){
            echo "
                <script>
                    alert('Data Berhasil Di Update');
                    document.location.href = 'hasilform.php';
                </script>           
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal Di Update');
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
        <h1 align="center">Edit Data Pengunjung</h1>
        <form action="" method="post">
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
</body>
</html>