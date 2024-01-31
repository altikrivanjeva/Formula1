<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>
<body>


<nav id="nav">
        <div id="menu-icon">&#9776;</div>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../teams.php">Teams</a></li>
            <li><a href="../react-game.php">Game</a></li>
            <li><a href="../contacts.php">Contact</a></li>

        </ul>
    </nav>

    <style>
        #nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
            padding: 1.5em 0;
            z-index: 1;
            overflow: hidden;
            font-family: 'Roboto', sans-serif;
            font-size: large;
            color: white;
            background: rgba(0, 0, 0, 0.7) none;
            transition: top 0.3s;
            z-index: 10;
            font-weight: 1px;
        }

        #nav.active {
            top: 60px;
        }

        #nav>ul {
            line-height: 0px;
            position: relative;
            display: inline-block;
            margin: 0;
            height: auto;
            border-left: solid 1px rgba(192, 192, 192, 0.35);
            border-right: solid 1px rgba(192, 192, 192, 0.35);
        }

        #nav>ul:before,
        #nav>ul:after {
            content: '';
            display: block;
            width: 300%;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            height: 5px;
            border-top: solid 1px rgba(232, 48, 48, 0.35);
            border-bottom: solid 1px rgba(192, 192, 192, 0.35);
        }

        #nav>ul:before {
            left: 100%;
            margin-left: 1px;
        }

        #nav>ul:after {
            right: 100%;
            margin-right: 1px;
        }

        #nav>ul>li {
            display: inline-block;
            margin: -9px 0.5em 0 0.5em;
            border-radius: 0.5em;
            padding: 0.85em;
            border: solid 1px transparent;
            transition: color 0.35s ease-in-out, border-color 0.35s ease-in-out;
        }

        #nav>ul>li.active {
            border-color: rgba(192, 192, 192, 0.35);
        }

        #nav>ul>li>a,
        #nav>ul>li>span {
            display: block;
            color: inherit;
            text-decoration: none;
            border: 0;
            outline: 0;
        }

        #nav>ul>li>ul {
            display: none;
        }

        #nav>ul>li>a:hover {
            color: rgb(230, 0, 43);
        }

        #menu-icon {
            display: none;
        }

        @media only screen and (max-width: 768px) {
            #nav {
                position: static;
                background: rgba(0, 0, 0, 0.7) none;
            }

            #nav.active {
                top: 0;
            }

            #nav>ul {
                display: none;
            }

            #menu-icon {
                display: block;
                text-align: left;
                padding-left: 5%;
            }

            #nav.active>ul {
                display: block;
                padding: 0px;
                background: rgba(0, 0, 0, 0.7) none;
                /* Added background for mobile menu */
                position: absolute;
                width: 100%;
                top: 60px;
                /* Adjust this value based on your menu height */

            }

            #nav>ul>li {
                display: block;
                margin: 0 0 0.5em 0;
            }

            #nav>ul>li.active {
                border-color: transparent;
            }

            #nav>ul>li>a:hover {
                color: rgb(230, 0, 43);
            }
        }
    </style>

    <script>
        document.getElementById('menu-icon').addEventListener('click', function() {
            document.getElementById('nav').classList.toggle('active');
        });
    </script>

    <br>
    <br>
    
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>