<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">SaiDa</a>
        <nav class="navbar">
            <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week8/home.php" class="font-effect-neon">Home</a>
            <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week8/about.php" class="font-effect-neon">About</a>
            <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week5/gallery.html" class="font-effect-neon">Gallery</a>
            <a href="#" class="font-effect-neon">Guests</a>
            <a href="https://socitcloud.apc.edu.ph/~amtauyan/lab2/Week5/resources.html" class="font-effect-neon">References</a>
        </nav>
    </header>
    <div class="text-box">
        <h1> SaiDa's <span class="auto-input"></h1>
        <p> IT Student · Sporty · Once · Blink · MY </p>
    </div>
    <img src="Profile.jpg" class="profile" alt="Portrait of Angela Tauyan">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-input", {
            strings: ["Solitary", "Profile", "Dump"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        })
    </script>
    <script src="home.js"></script>
</body>
</html>