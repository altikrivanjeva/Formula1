<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid']) || $_SESSION['role'] != 'admin'){
    header("Location: index.php");
    exit();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Add Track - Admin</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php"><img src="../../assets/logot/F1.png" alt="" style="width: 100px; height: auto;"></a></p>
        </div>

        <div class="right-links">
            <a href="home.php">Dashboard</a>
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php 
               if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $place = $_POST['place'];
                $length = $_POST['length'];
                $image_url = $_POST['image_url'];

                mysqli_select_db($con, "formula1");
                $insert_query = mysqli_query($con,"INSERT INTO tracks(name, place, length, image_url) VALUES('$name', '$place', '$length', '$image_url')") or die("error occurred");

                if($insert_query){
                    echo "<div class='message success'>
                    <p>Track Added Successfully!</p>
                </div> <br>";
                    echo "<a href='home.php'><button class='btn'>Back to Dashboard</button></a>";
                }
               }else{
            ?>
            <header>Add New Track</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="name">Track Name</label>
                    <input type="text" name="name" id="name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="place">Place (Country)</label>
                    <input type="text" name="place" id="place" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="length">Circuit Length (e.g., 5.412 Km)</label>
                    <input type="text" name="length" id="length" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="image_url">Image URL (e.g., ../Assets/tracks/monaco.png)</label>
                    <input type="text" name="image_url" id="image_url" autocomplete="off" required>
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Add Track" required>
                </div>
                
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
