<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="tracks.css">

</head>

<body>
    <?php
include ("header.html");
?>

    <div class="tracks-container">
        <?php
        $config_path = __DIR__ . "/login/php/config.php";
        if (file_exists($config_path)) {
            include ($config_path);
        } else {
            // Fallback for different directory structures if needed
            include ("login/php/config.php");
        }
        
        // Ensure we are using the formula1 database for tracks
        mysqli_select_db($con, "login-register");
        
        $tracks_query = mysqli_query($con, "SELECT * FROM tracks");
        
        if($tracks_query && mysqli_num_rows($tracks_query) > 0) {
            while($row = mysqli_fetch_assoc($tracks_query)) {
                echo '<div class="track-item">
                        <div class="track-image">
                            <img src="'.$row['image_url'].'" alt="'.$row['name'].'">
                        </div>
                        <div class="track-info">
                            <h1>'.$row['name'].'</h1>
                            <h2>Place : <span class="place-name">'.$row['place'].'</span></h2>
                            <h3>Circuit Length : '.$row['length'].'</h3>
                        </div>
                    </div>';
            }
        } else {
            echo '<div class="message" style="color: white; text-align: center;"><p>No tracks found in the database.</p></div>';
        }
        ?>
    </div>

    <?php
include ("footer.html");
?>

</body>

</html>