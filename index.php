<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/global.css?v=<?php echo time(); ?>" type="text/css" >
    <script src="./scripts/sidebar.js"></script>
    <script src="./scripts/api.js"></script>
    <title>Document</title>
</head>

<body>
    <?php include "./components/topbar.html"; ?>
    <?php include "./components/sidebar.html"; ?>

    <div onclick="closesidebar()" class="content">
        <div class="degrade">
            <img class="banner" src="./assets/images/2086790.webp" alt="">
        </div>
        
        <br>
        <h1>Purple game</h1>
        <h2 class="titleborder">Purple game</h2>
        
        <h3>Purple game</h3>
        <p style="width: 600px">Elden Ring is a fantasy, action and open world game with RPG elements such as stats, weapons and spells. Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord in the Lands Between.</p>
        <button>Find game</button>
        <br>
        <br>
        <div style="display: flex;">
            <div class="badge">Role-Playing (RPG)</div>
            <div class="badge">Adventure</div>
            <div class="badge">Shooter</div>
        </div>
        <br>
        <div class="card center">
            <input type="password" name="password" id="password"><br>
            <br>
            <input type="date" name="" id=""><br>
            <br>
            <input type="checkbox" name="" id=""><br>
            <input type="checkbox" name="" id=""><br>
            <input type="checkbox" name="" id=""><br>
            <br>
            <input type="radio" name="malist" id="1"><br>
            <input type="radio" name="malist" id="2"><br>
            <input type="radio" name="malist" id="3"><br>
        </div>
        <br><br><br>
        
        <div class="grid">

        </div>

    </div>



    
</body>
</html>