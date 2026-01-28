<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: rgb(29, 29, 29);
            color: white;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding-bottom: 50px;
        }

        .teams-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
            max-width: 1400px;
            margin-top: 40px;
            padding: 0 20px;
        }

        .h1top { 
            text-align: center;
            margin-top: 50px;
        }

        .h1top h1 {
            font-size: 2.5em;
            color: #e10600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 5px;
        }

        .h1top p {
            color: #888;
            font-size: 0.9em;
        }

        .flip-card {
            background-color: transparent;
            width: 380px;
            height: 250px;
            perspective: 1000px;
            cursor: pointer;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            transform-style: preserve-3d;
        }

        .flip-card.flipped .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            background: #1a1a1a;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .flip-card-front img, .flip-card-back img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .flip-card-back {
            transform: rotateY(180deg);
        }

        @media (max-width: 600px) {
            .flip-card {
                width: 90vw;
                height: 60vw;
            }
        }
    </style>
</head>
<body>

<?php
include ("header.html");
?>

<div class="h1top">
    <h1>F1 Teams & Drivers</h1>
    <p>(Click a card to reveal the team)</p>
</div>

<div class="teams-grid">
    <div class="flip-card" onclick="this.classList.toggle('flipped')">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="../assets/mercedes-logo.jpg" alt="Mercedes Logo">
            </div>
            <div class="flip-card-back">
                <img src="../assets/mercedes.jpg" alt="Mercedes Team">
            </div>
        </div>
    </div>

    <div class="flip-card" onclick="this.classList.toggle('flipped')">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="../assets/redbull-logo.jpg" alt="Red Bull Logo">
            </div>
            <div class="flip-card-back">
                <img src="../assets/redbull.jpg" alt="Red Bull Team">
            </div>
        </div>
    </div>

    <div class="flip-card" onclick="this.classList.toggle('flipped')">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="../assets/ferrari-logo.jpg" alt="Ferrari Logo">
            </div>
            <div class="flip-card-back">
                <img src="../assets/ferrari.jpg" alt="Ferrari Team">
            </div>
        </div>
    </div>

    <div class="flip-card" onclick="this.classList.toggle('flipped')">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="../assets/mclaren-logo.jpg" alt="McLaren Logo">
            </div>
            <div class="flip-card-back">
                <img src="../assets/mclaren.jpg" alt="McLaren Team">
            </div>
        </div>
    </div>

    <div class="flip-card" onclick="this.classList.toggle('flipped')">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="../assets/astonmartin-logo.jpg" alt="Aston Martin Logo">
            </div>
            <div class="flip-card-back">
                <img src="../assets/astonmartin.jpg" alt="Aston Martin Team">
            </div>
        </div>
    </div>

    <div class="flip-card" onclick="this.classList.toggle('flipped')">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="../assets/alpine-logo.jpg" alt="Alpine Logo">
            </div>
            <div class="flip-card-back">
                <img src="../assets/alpine.jpg" alt="Alpine Team">
            </div>
        </div>
    </div>

    <div class="flip-card" onclick="this.classList.toggle('flipped')">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="../assets/alpha-logo.jpg" alt="AlphaTauri Logo">
            </div>
            <div class="flip-card-back">
                <img src="../assets/alpha.jpg" alt="AlphaTauri Team">
            </div>
        </div>
    </div>

    <div class="flip-card" onclick="this.classList.toggle('flipped')">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="../assets/alfaromeo-logo.jpg" alt="Alfa Romeo Logo">
            </div>
            <div class="flip-card-back">
                <img src="../assets/alfaromeo.jpg" alt="Alfa Romeo Team">
            </div>
        </div>
    </div>

    <div class="flip-card" onclick="this.classList.toggle('flipped')">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="../assets/haas-logo.jpg" alt="Haas Logo">
            </div>
            <div class="flip-card-back">
                <img src="../assets/haas.jpg" alt="Haas Team">
            </div>
        </div>
    </div>
</div>

<div id="posht">
<?php
include ("footer.html");
?>
</div>

</body>
</html>
