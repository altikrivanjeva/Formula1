<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reaction Time Game</title>
  <style>
    
   

#clockContainer {
	position: relative;
	margin: auto;
	height: 12vw;
	width: 12vw;
	background: url(../assets/logot/clock.png) no-repeat;
	background-size: 100%;
  
}

#hour,
#minute,
#second {
	position: absolute;
	background: gold;
	border-radius: 10px;
	transform-origin: bottom;
}

#hour {
	width: 1.8%;
	height: 25%;
	top: 25%;
	left: 48.85%;
	opacity: 0.8;
}

#minute {
	width: 1.6%;
	height: 30%;
	top: 19%;
	left: 48.9%;
	opacity: 0.8;
}

#second {
	width: 1%;
	height: 40%;
	top: 9%;
	left: 49.25%;
	opacity: 0.8;
}

h1, p {
    color: white;
}

    body {
    font-family: 'Roboto', sans-serif;
        
      margin-top: 50px;
      background-color: rgb(29, 29, 29);
      
      margin: 70px 0 0 0;
    }
#game {
  
  text-align: center;
}
   

    .box {
      width: 600px;
      height: 300px;
      margin: 20px auto;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .box.red {
  background: url(../assets/samafori-off.png) no-repeat;
  background-size: 100%;
}


    .box.blue {
        background: url(../assets/samafori-on.png) no-repeat;
  background-size: 100%;
    }

button {
    width: 150px;
    height: 40px;
    font-size: large;
    background-color: white;
    border: none;
}

button:hover{
    background-color: red;
}

.ora {
    background-color: rgb(44, 44, 44);
    padding: 0px;
    margin: 0px;
    

}

@media (max-width: 767px) {
  #clockContainer {
    position: relative;
    margin: auto;
    height: 12vw;
    width: 12vw;
    background: url(../assets/logot/clock.png) no-repeat;
    background-size: 100%;
    margin-top: 70px; 
  }

  body {
    padding-bottom:20px; 
  }

  h1, p {
    font-size: 10px;
  }

  .box {
      width: 200px;
      height: 100px;
      margin: 20px auto;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

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
  font-size: 11px;
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
     

<div class="ora">

<br>
<br>
<br>
<br>
<br>
    <!-- ora -->
    <div id="clockContainer">
        <div id="hour"></div>
        <div id="minute"></div>
        <div id="second"></div>
    </div>
    <br>


</div>

  <h1 style="text-align: center;">Reaction Time Game</h1>

  <div id="game">

  <script>
    let gameStarted = false;
    let showBox = false;
    let startTime = 0;
    let reactionTime = null;
    let playAgainVisible = false;

    const startGame = () => {
      gameStarted = true;
      showBox = false;
      reactionTime = null;
      playAgainVisible = false;
      render();
      setTimeout(() => {
        showBox = true;
        startTime = Date.now(); 
        updateGame();
      }, Math.floor(Math.random() * 4000) + 2000); 
    };

    const handleClick = () => {
      if (showBox) {
        if (!playAgainVisible) {
          playAgainVisible = true;
          render();
        }
        reactionTime = Date.now() - startTime;
        showBox = false;
        updateGame();
      }
    };

    const updateGame = () => {
      if (gameStarted) {
        const gameBox = document.getElementById('game-box');
        if (showBox && gameBox) {
          gameBox.classList.remove('red');
          gameBox.classList.add('blue');
          startTime = Date.now();
        } else {
          if (gameBox) {
            gameBox.classList.remove('blue');
            gameBox.classList.add('red');
          }
          if (showBox) {
            const timeout = setTimeout(() => {
              showBox = true;
              updateGame();
            }, Math.floor(Math.random() * 4000) + 1000); 


            clearTimeout(timeout);
          }
        }
      }

      render();
    };

    const render = () => {
      const gameElement = document.getElementById('game');

      if (gameStarted) {
        gameElement.innerHTML = `
          <p>Wait for the traffic light to turn green, then click it!</p>
          <div id="game-box" class="box ${showBox ? 'blue' : 'red'}" onclick="handleClick()"></div>
          ${reactionTime !== null ? `<p>Your reaction time: ${reactionTime} milliseconds</p>` : ''}
          ${playAgainVisible ? '<button onclick="startGame()">Play Again</button>' : ''}
        `;
      } else {
        gameElement.innerHTML = `<button onclick="startGame()">Start Game</button>`;
      }
    };

    render();



    setInterval(() => {
	d = new Date(); 
	hr = d.getHours();
	min = d.getMinutes();
	sec = d.getSeconds();
	hr_rotation = 30 * hr + min / 2;
	min_rotation = 6 * min;
	sec_rotation = 6 * sec;

	hour.style.transform = `rotate(${hr_rotation}deg)`;
	minute.style.transform = `rotate(${min_rotation}deg)`;
	second.style.transform = `rotate(${sec_rotation}deg)`;
}, 1000);

  </script>
</div>
<br>
<br>

<?php
    include ("footer.html");
    ?>
     

</body>
</html>
