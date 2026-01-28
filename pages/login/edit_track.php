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
    <title>Edit Track - Admin</title>
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
                $id = $_POST['id'];
                $name = $_POST['name'];
                $place = $_POST['place'];
                $length = $_POST['length'];
                $image_url = $_POST['image_url'];

                mysqli_select_db($con, "formula1");
                $edit_query = mysqli_query($con,"UPDATE tracks SET name='$name', place='$place', length='$length', image_url='$image_url' WHERE id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message success'>
                    <p>Track Updated Successfully!</p>
                </div> <br>";
                    echo "<a href='home.php'><button class='btn'>Back to Dashboard</button></a>";
                }
               }else{

                $id = $_GET['id'];
                mysqli_select_db($con, "formula1");
                $query = mysqli_query($con,"SELECT * FROM tracks WHERE id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_name = $result['name'];
                    $res_place = $result['place'];
                    $res_length = $result['length'];
                    $res_image = $result['image_url'];
                }

            ?>
            <header>Edit Track</header>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="field input">
                    <label for="name">Track Name</label>
                    <input type="text" name="name" id="name" value="<?php echo $res_name; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="place">Place (Country)</label>
                    <input type="text" name="place" id="place" value="<?php echo $res_place; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="length">Circuit Length</label>
                    <input type="text" name="length" id="length" value="<?php echo $res_length; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="image_url">Image URL</label>
                    <input type="text" name="image_url" id="image_url" value="<?php echo $res_image; ?>" autocomplete="off" required>
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update Track" required>
                </div>
                
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
