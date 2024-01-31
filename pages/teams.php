<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-wrap: wrap;
            background-color: rgb(29, 29, 29);
            
	
        }
     

        
        .image-container {
            position: relative;
            perspective: 1000px;
            margin-bottom: 40px;
            width: 400px; 
            margin-top: 170px;
            padding-bottom: 200px; 
        }

        .image-container > img {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            transform-style: preserve-3d;
            backface-visibility: hidden;
            width: 100%;
            height: auto;
            cursor: pointer;
        }

        .logo-image, .main-image {
            transform-origin: center center;
            opacity: 1;
            z-index: 1;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

       
        .main-image {
            transform: translate(-50%, -50%) rotateY(180deg) scale(0.8);
            opacity: 0;
            z-index: 2;
        }

        @media (max-width: 600px) {
            .image-container {
                margin-top: 170px;
                margin-bottom: -20px;
                width: 100%;
                padding-bottom: 200px; 
            }
        }

.h1top { 
            font-size: 1em;
            color: white;
            margin-top: 100px;
            margin-bottom: 20px;
            margin-left: 30%;
            margin-right: 30%;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            }

            .login-button > button {
  position: fixed;
  bottom: 3vw;
  right: 3vw;
  width: 100px;
  height: 50px;
  display: block !important;
  z-index: 99998;
  background-color: #ef8376;
  border: none;
  font-family: "Roboto", sans-serif;
  color: white;
  border-radius: 30px;
}

.login-button > button:hover{
  background-color: red;
  z-index: 99998;
  }

    </style>
</head>
<body>

<!-- login button -->
<div class="login-button">
<button onclick="window.location.href='../pages/login/index.php'">Login/Register</button>
</div>

<?php
include ("header.html");
?>
					


            </div>

    <div class="h1top">
    <h1>F1 TEAMS AND DRIVERS:</h1>
    </div>
    <p style="color: white; margin-top: 10px; margin-left: 40%; margin-right: 40%; color: gray; font-size: 90%;">(click the images)</p>


    <div class="image-container">
        <img id="mercedes-logo" class="logo-image" src="../assets/mercedes-logo.jpg" alt="" onclick="toggleImages('mercedes')">
        <img id="mercedes" class="main-image" src="../assets/mercedes.jpg" alt="" onclick="toggleImages('mercedes')">
    </div>

    <div class="image-container">
        <img id="redbull-logo" class="logo-image" src="../assets/redbull-logo.jpg" alt="" onclick="toggleImages('redbull')">
        <img id="redbull" class="main-image" src="../assets/redbull.jpg" alt="" onclick="toggleImages('redbull')">
    </div>

    <div class="image-container">
        <img id="ferrari-logo" class="logo-image" src="../assets/ferrari-logo.jpg" alt="" onclick="toggleImages('ferrari')">
        <img id="ferrari" class="main-image" src="../assets/ferrari.jpg" alt="" onclick="toggleImages('ferrari')">
    </div>

    <div class="image-container">
        <img id="mclaren-logo" class="logo-image" src="../assets/mclaren-logo.jpg" alt="" onclick="toggleImages('mclaren')">
        <img id="mclaren" class="main-image" src="../assets/mclaren.jpg" alt="" onclick="toggleImages('mclaren')">
    </div>

   
    <div class="image-container">
        <img id="astonmartin-logo" class="logo-image" src="../assets/astonmartin-logo.jpg" alt="" onclick="toggleImages('astonmartin')">
        <img id="astonmartin" class="main-image" src="../assets/astonmartin.jpg" alt="" onclick="toggleImages('astonmartin')">
    </div>

   
    <div class="image-container">
        <img id="alpine-logo" class="logo-image" src="../assets/alpine-logo.jpg" alt="" onclick="toggleImages('alpine')">
        <img id="alpine" class="main-image" src="../assets/alpine.jpg" alt="" onclick="toggleImages('alpine')">
    </div>

  
    <div class="image-container">
        <img id="alpha-logo" class="logo-image" src="../assets/alpha-logo.jpg" alt="" onclick="toggleImages('alpha')">
        <img id="alpha" class="main-image" src="../assets/alpha.jpg" alt="" onclick="toggleImages('alpha')">
    </div>

   
    <div class="image-container">
        <img id="alfaromeo-logo" class="logo-image" src="../assets/alfaromeo-logo.jpg" alt="" onclick="toggleImages('alfaromeo')">
        <img id="alfaromeo" class="main-image" src="../assets/alfaromeo.jpg" alt="" onclick="toggleImages('alfaromeo')">
    </div>

   
    <div class="image-container">
        <img id="haas-logo" class="logo-image" src="../assets/haas-logo.jpg" alt="" onclick="toggleImages('haas')">
        <img id="haas" class="main-image" src="../assets/haas.jpg" alt="" onclick="toggleImages('haas')">
    </div>

    <script>
    var isLogoVisible = true;

    function toggleImages(type) {
        var logo = document.getElementById(type + "-logo");
        var image = document.getElementById(type);

        if (isLogoVisible) {
            logo.style.transform = "translate(-50%, -50%) rotateY(180deg)";
            image.style.transform = "translate(-50%, -50%) rotateY(0deg)";
            image.style.opacity = "1";
        } else {
            logo.style.transform = "translate(-50%, -50%) rotateY(0deg)";
            image.style.transform = "translate(-50%, -50%) rotateY(-180deg)";
            image.style.opacity = "1";
        }

        isLogoVisible = !isLogoVisible;
    }
</script>





<div id="posht">
<?php
include ("footer.html");
?>
</div>


</body>
</html>
