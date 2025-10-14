<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Demo Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: black;
        color: white;
    }
    p {
        font-size: 16px;
        line-height: 1.5;
    }
</style>
<body>
    <?php
     $name = "Zain Fatima";
     echo "<h1>Hello, $name!</h1>";
     print "hello " . $name . "<br>";
     echo "greeting $name and everbody";

     $animes = [
        "demon slayer", 
        "one piece", 
        "naruto", 
        "attack on titan", 
        "death note", 
        "jujutsu kaisen", 
        "hunter x hunter"
    ];
    ?>
    <h1>My fav Animes</h1>
    <ul>
        <?php
            foreach ($animes as $anime) {
                echo "<li>{$anime}</li>";
            }
        ?>
    </ul>

</body>
</html>
