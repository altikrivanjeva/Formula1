<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="../index.php"><img src="../../assets/logot/F1.png" alt="" style="width: 100px; height: auto;"></a> </p>
        </div>

        <div class="right-links">

            <?php 

            
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

        </div>
    </div>
    <main>
       <div class="main-box">
          <div class="main-box top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b></p>
            </div>
            <div class="box">
                <p>You are <span><?php echo $res_Age ?> years old</span>.</p> 
            </div>
          </div>

          <?php 
            $current_user_role = $_SESSION['role'] ?? 'user';
            
            if($current_user_role == 'admin'){
                echo '<div class="user-table-container">
                        <h2>Manage Users</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>';

                $users_query = mysqli_query($con, "SELECT * FROM users");
                while($user_row = mysqli_fetch_assoc($users_query)){
                    echo '<tr>
                            <td>'.$user_row['Id'].'</td>
                            <td>'.$user_row['Username'].'</td>
                            <td>'.$user_row['Email'].'</td>
                            <td>'.$user_row['Age'].'</td>
                            <td>'.$user_row['Role'].'</td>
                            <td>
                                <a href="edit_user.php?id='.$user_row['Id'].'" class="action-btn edit-btn">Edit</a>
                                <a href="delete_user.php?id='.$user_row['Id'].'" class="action-btn delete-btn" onclick="return confirm(\'Are you sure you want to delete this user?\')">Delete</a>
                            </td>
                          </tr>';
                }

                echo '          </tbody>
                        </table>
                      </div>';

                // Track Management
                echo '<div class="user-table-container" style="margin-top: 40px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <h2 style="margin-bottom: 0;">Manage Tracks</h2>
                            <a href="add_track.php" class="btn" style="text-decoration: none; line-height: 45px; text-align: center;">Add New Track</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Place</th>
                                    <th>Length</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>';

                mysqli_select_db($con, "formula1");
                $tracks_query = mysqli_query($con, "SELECT * FROM tracks");
                if(!$tracks_query) {
                    // Table might not exist yet, show a message
                    echo '<tr><td colspan="5">Tracks table not found. Please run the SQL query to create it.</td></tr>';
                } else {
                    while($track_row = mysqli_fetch_assoc($tracks_query)){
                        echo '<tr>
                                <td>'.$track_row['id'].'</td>
                                <td>'.$track_row['name'].'</td>
                                <td>'.$track_row['place'].'</td>
                                <td>'.$track_row['length'].'</td>
                                <td>
                                    <a href="edit_track.php?id='.$track_row['id'].'" class="action-btn edit-btn">Edit</a>
                                    <a href="delete_track.php?id='.$track_row['id'].'" class="action-btn delete-btn" onclick="return confirm(\'Are you sure you want to delete this track?\')">Delete</a>
                                </td>
                              </tr>';
                    }
                }

                echo '          </tbody>
                        </table>
                      </div>';
            }
          ?>
       </div>
    </main>

<!-- Include footer -->
<?php include 'footer.php'; ?>

</body>
</html>