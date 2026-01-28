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
    <title>Edit User - Admin</title>
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
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $role = $_POST['role'];
                $id = $_POST['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', Age='$age', Role='$role' WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message success'>
                    <p>User Updated Successfully!</p>
                </div> <br>";
                    echo "<a href='home.php'><button class='btn'>Back to Dashboard</button></a>";
                }
               }else{

                $id = $_GET['id'];
                $query = mysqli_query($con,"SELECT * FROM users WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                    $res_Role = $result['Role'];
                }

            ?>
            <header>Edit User</header>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" value="<?php echo $res_Age; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="role">Role</label>
                    <select name="role" id="role" required>
                        <option value="user" <?php echo ($res_Role == 'user') ? 'selected' : ''; ?>>User</option>
                        <option value="admin" <?php echo ($res_Role == 'admin') ? 'selected' : ''; ?>>Admin</option>
                    </select>
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update User" required>
                </div>
                
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
