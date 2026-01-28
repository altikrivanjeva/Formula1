<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="style.css" />


  <link rel="icon" type="image/x-icon" href="assets/F1.ico">

</head>




<body>
  <div class="middle">
    <div class="bar bar1"></div>
    <div class="bar bar2"></div>
    <div class="bar bar3"></div>
    <div class="bar bar4"></div>
    <div class="bar bar5"></div>
    <div class="bar bar6"></div>
    <div class="bar bar7"></div>
    <div class="bar bar8"></div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(function() {
        document.querySelector('.middle').classList.add('hide-bars');
      }, 2000);
    });
  </script>

  <?php
include ("header.html");
?>

  <div id="header">

    <video autoplay muted loop>
      <source src="../assets/bg-video.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <div class="inner">
      <header>
        <hr />
        <p style="background-color: black; display: inline-block; padding: 10px 20px;">Fastest sport in the World!</p>
        <br>
        <br>
        <br>
      </header>
    </div>

  </div>

  <section id="banner">
    <header>
      <h2><strong></strong>F1 is about the best drivers competing against each <br> for the best teams producing the
        best cars they can.

      </h2>
      <br>
      <br>
      <br>

      <h1 style="font-size: 100px; font-weight: 100;">Drivers:</h1>
    </header>
  </section>

  <div class="carousel-container">
    <div class="carousel" id="imageCarousel">
      <div class="carousel-item">
        <img src="../assets/banner1.jpg" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="../assets/banner2.jpg" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="../assets/banner3.jpg" alt="Image 3">
      </div>
      <div class="carousel-item">
        <img src="../assets/banner4.jpg" alt="Image 3">
      </div>
    </div>
    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="next" onclick="changeSlide(1)">&#10095;</button>
  </div>
  <script src="script.js"></script>

  <div class="wrapper style2">

    <article id="main" class="container special">
      <header>
        <br>
        <br>
        <p>
          Formula One, commonly known as Formula 1 or F1, is the highest class of international racing for open-wheel
          single-seater formula racing cars sanctioned by the Fédération Internationale de l'Automobile (FIA). The FIA
          Formula One World Championship has been one of the premier forms of racing around the world since its
          inaugural running in 1950.

        </p>
      </header>

      <footer>
        <h1 style="color: black; font-size: 60px;">AUSTRALIAN GP next race in :</h1>
        <br>
        <p id="timer" style="font-size: 50px; text-align: center; line-height: 1.8;"></p>
      </footer>
    </article>

  </div>


  <h1 style="color: white; text-align: center; margin: 40px; font-size: 50px;
">F1 Standings 2023</h1>

  <table class="darkTable">
    <thead>
      <tr>
        <th>Rank</th>
        <th>Driver</th>
        <th>Points</th>
        <th>Wins</th>
        <th>Podiums</th>
      </tr>
    </thead>
    <tfoot>
    </tfoot>
    <tbody>
      <tr>
        <td>1</td>
        <td>M. Verstappen</td>
        <td>575</td>
        <td>19</td>
        <td>21</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Sergio Perez</td>
        <td>285</td>
        <td>2</td>
        <td>9</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Lewis Hamilton</td>
        <td>234</td>
        <td>0</td>
        <td>6</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Fernando Alonso</td>
        <td>206</td>
        <td>0</td>
        <td>8</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Charles Leclerc</td>
        <td>206</td>
        <td>0</td>
        <td>6</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Lando Norris</td>
        <td>205</td>
        <td>0</td>
        <td>7</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Carlos Sainz Jnr</td>
        <td>200</td>
        <td>1</td>
        <td>3</td>
      </tr>
      <tr>
        <td>8</td>
        <td>George Russell</td>
        <td>175</td>
        <td>0</td>
        <td>2</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Oscar Piastri</td>
        <td>97</td>
        <td>0</td>
        <td>2</td>
      </tr>
      <tr>
        <td>10</td>
        <td>Lance Stroll</td>
        <td>74</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <td>11</td>
      <td>Pierre Gasly</td>
      <td>62</td>
      <td>0</td>
      <td>1</td>
      </tr>
      <tr>
        <td>12</td>
        <td>Esteban Ocon</td>
        <td>58</td>
        <td>0</td>
        <td>1</td>
      </tr>
      <tr>
        <td>13</td>
        <td>Alexander Albon</td>
        <td>27</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>14</td>
        <td>Yuki Tsunoda</td>
        <td>17</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>15</td>
        <td>Valtteri Bottas</td>
        <td>10</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>16</td>
        <td>Nico Hulkenberg</td>
        <td>9</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>17</td>
        <td>Daniel Ricciardo</td>
        <td>6</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>18</td>
        <td>Zhou Guanyu</td>
        <td>6</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>19</td>
        <td>Kevin Magnussen</td>
        <td>3</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>20</td>
        <td>Liam Lawson</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <td>21</td>
      <td>Logan Sargeant</td>
      <td>1</td>
      <td>0</td>
      <td>0</td>
      </tr>
      <tr>
        <td>22</td>
        <td>Nyck de Vries</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
    </tbody>
    </tr>
  </table>

  <?php
include ("footer.html");
?>

</body>

</html>